<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Type;
use App\Models\Viscosity;
use App\Models\Volume;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $volumes = Volume::all();
        $viscosities = Viscosity::all();
        $types = Type::all();
        return view('admin.product.create', compact('categories', 'types', 'brands', 'viscosities', 'volumes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = [
            'title' => $request->title,
            'brand_id' => $request->brand,
            'viscosity_id' => $request->viscosity,

            'type_id' => $request->type,
            'category_id' => $request->category_id,
            'volume_id' => $request->volume,
            'price' => $request->price,
            'model' => $request->model,
            'base' => $request->base,
            'slug' => Str::slug($request->title)
        ];
        Product::create($data);
        return redirect()->route('admin.product.index')->with('message', 'Товар был добавлен');
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
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $brands = Brand::all();
        $volumes = Volume::all();
        $viscosities = Viscosity::all();
        $types = Type::all();
        return view('admin.product.edit', compact('product', 'categories', 'types', 'brands', 'viscosities', 'volumes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $data = [
            'title' => $request->title,
            'brand_id' => $request->brand,
            'viscosity_id' => $request->viscosity,
            'category_id' => $request->category_id,
            'volume_id' => $request->volume,
            'type_id' => $request->type,
            'price' => $request->price,
            'model' => $request->model,
            'base' => $request->base,
            'slug' => Str::slug($request->title)
        ];
        Product::find($id)->update($data);
        return redirect()->route('admin.product.index')->with('message', 'Товар был изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('admin.product.index')->with('message', 'Товар был удален');
    }
}
