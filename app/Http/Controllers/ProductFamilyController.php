<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFamilyRequest;
use App\Models\ProductFamily;
use Illuminate\Http\Request;

class ProductFamilyController extends Controller
{
    
    public $family;

    public function __construct(ProductFamily $family)
    {
        $this->family = $family;
        // dd($this->family);
    }
    public function index()
    {
        $family = $this->family->getActive();
        // dd($family);
        return view("products.bundlers.familia.index", [
            'family' => $family,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $family = new ProductFamily();
        return view("products.bundlers.familia.create", [
            'family' => $family,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFamilyRequest $request)
    {
        $data = $request->validated();
        // dd($data);

        $family = $this->family->create([
            'nameFamily' => $data['nameFamily'],
            'statusFamily' => $data['statusFamily'],
        ]);

        try {
            $familyCreated = $family->save();

            if ($familyCreated) {
                $message = "Familia creada correctamente";
                $status = true;
            } else {
                $message = "No se pudo crear la familia";
                $status = false;
            }
        } catch (\Exception $e) {
            $message = "Error al crear la familia";
            $status = false;
        }

        return redirect()->route('product.family.index')->with('status', $status)->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductFamily $family)
    {
        // dd($family);
        return view("products.bundlers.familia.edit", [
            'family' => $family,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFamilyRequest $request, ProductFamily $family)
    {
        $data = $request->validated();
        // dd($data);

        $family->update([
            'nameFamily' => $data['nameFamily'],
            'statusFamily' => $data['statusFamily'],
        ]);

        try {
            $familyUpdated = $family->save();

            if ($familyUpdated) {
                $message = "Familia actualizada correctamente";
                $status = true;
            } else {
                $message = "No se pudo actualizar la familia";
                $status = false;
            }
        } catch (\Exception $e) {
            $message = "Error al actualizar la familia";
            $status = false;
        }

        return redirect()->route('product.family.index', ['family' => $family])->with('status', $status)->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductFamily $family)
    {
        // dd($family);
        $family->statusFamily = 0;
        $familyDeleted = $family->save();
        $status = false;

        try{
            if ($familyDeleted) {
                $message = "Familia eliminada correctamente";
                $status = true;
            } else {
                $message = "No se pudo eliminar la familia";
                $status = false;
            }
            return redirect()->route('product.family.index')->with('status', $status)->with('message', $message);
        } catch (\Exception $e) {
            $message = "Error al eliminar la familia";
            $status = false;
            return redirect()->route('product.family.index')->with('status', $status)->with('message', $message);
        }
    }
}
