<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductGroupRequest;
use App\Models\ProductGroup;
use Illuminate\Http\Request;

class ProductGroupController extends Controller
{
    public $group;

    public function __construct(ProductGroup $group)
    {
        $this->group = $group;
        // dd($this->groups);
    }
    public function index()
    {
        $group = $this->group->getActive();
        // dd($groups);
        return view("products.bundlers.grupo.index", [
            'group' => $group,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $group = new ProductGroup();
        return view("products.bundlers.grupo.create", [
            'group' => $group,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductGroupRequest $request)
    {
        $data = $request->validated();
        // dd($data);

        $group = $this->group->create([
            'nameGroup' => $data['nameGroup'],
            'statusGroup' => $data['statusGroup'],
        ]);

        try {
            $groupCreated = $group->save();

            if ($groupCreated) {
                $message = 'El grupo se creó correctamente';
                $status = true;
            } else {
                $message = 'El grupo no se creó correctamente';
                $status = false;
            }
        } catch (\Exception $e) {
            $message = 'El grupo no se creó correctamente';
            $status = false;
        }

        return redirect()->route('product.group.index')->with('status', $status)->with('message', $message);
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
    public function edit(ProductGroup $group)
    {
        return view("products.bundlers.grupo.edit", [
            'group' => $group,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductGroupRequest $request, ProductGroup $group)
    {
        $data = $request->validated();
        // dd($data);

        $group->update([
            'nameGroup' => $data['nameGroup'],
            'statusGroup' => $data['statusGroup'],
        ]);

        try {
            $groupUpdated = $group->save();

            if ($groupUpdated) {
                $message = 'El grupo se actualizó correctamente';
                $status = true;
            } else {
                $message = 'El grupo no se actualizó correctamente';
                $status = false;
            }
        } catch (\Exception $e) {
            $message = 'El grupo no se actualizó correctamente';
            $status = false;
        }

        return redirect()->route('product.group.index', ['group' => $group])->with('status', $status)->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductGroup $group)
    {
        $group->statusGroup = 0;
        $groupDeleted = $group->save();
        $status = false;

        try {
            if ($groupDeleted) {
                $message = 'El grupo se eliminó correctamente';
                $status = true;
            } else {
                $message = 'El grupo no se eliminó correctamente';
                $status = false;
            }
            return redirect()->route('product.group.index')->with('status', $status)->with('message', $message);
        } catch (\Exception $e) {
            $message = 'El grupo no se eliminó correctamente';
            $status = false;
        }
        return redirect()->route('product.group.index')->with('status', $status)->with('message', $message);
    }
}
