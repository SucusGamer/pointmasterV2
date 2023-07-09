<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCategoryRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public $categories;

    public function __construct(ProductCategory $categories)
    {
        $this->categories = $categories;
        // dd($this->categories);
    }

    public function index()
    {
        $categories = $this->categories->getActive();
        // dd($categories);
        return view("products.bundlers.categoria.index", [
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = new ProductCategory();
        return view("products.bundlers.categoria.create", [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCategoryRequest $request)
    {
        $data = $request->validated();
        // dd($data);

        $categories = $this->categories->create([
            'nameCategory' => $data['nameCategory'],
            'statusCategory' => $data['statusCategory'],
        ]);

        try {
            $categoryCreated = $categories->save();

            if ($categoryCreated) {
                $message = '¡Categoria creada correctamente!';
                $status = true;
            } else {
                $message = '¡No se pudo crear la categoria!';
                $status = false;
            }
        } catch (\Exception $e) {
            $message = '¡Error al crear la categoria!';
            $status = false;
        }

        return redirect()->route('product.category.index')->with('status', $status)->with('message', $message);
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
    public function edit(ProductCategory $category)
    {
        // dd($category);
        return view("products.bundlers.categoria.edit", [
            'categories' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductCategoryRequest $request, ProductCategory $category)
    {
        $data = $request->validated();
        // dd($data);

        $category->update([
            'nameCategory' => $data['nameCategory'],
            'statusCategory' => $data['statusCategory'],
        ]);

        try {
            $categoryUpdated = $category->save();

            if ($categoryUpdated) {
                $message = '¡Categoria actualizada correctamente!';
                $status = true;
            } else {
                $message = '¡No se pudo actualizar la categoria!';
                $status = false;
            }
        } catch (\Exception $e) {
            $message = '¡Error al actualizar la categoria!';
            $status = false;
        }

        return redirect()->route('product.category.index', ['category' => $category])->with('status', $status)->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $category)
    {
        // dd($category);
        try {
            $category->statusCategory = 0;
            $categoryDeleted = $category->save();
            $status = false;

            if ($categoryDeleted) {
                $message = '¡Categoria eliminada correctamente!';
                $status = true;
            } else {
                $message = '¡No se pudo eliminar la categoria!';
                $status = false;
            }
            return redirect()->route('product.category.index')->with('status', $status)->with('message', $message);
        } catch (\Exception $e) {
            $message = '¡Error al eliminar la categoria!';
            $status = false;
            return redirect()->route('product.category.index')->with('status', $status)->with('message', $message);
        }
    }
}
