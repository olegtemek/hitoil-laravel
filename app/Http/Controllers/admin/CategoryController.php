<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        Category::create([
            'title' => $request->title,
            'image' => $request->image,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_text' => $request->seo_text,
            'seo_ld' => $request->seo_ld,
            'slug' => Str::slug($request->title)
        ]);
        return redirect()->route('admin.category.index')->with('message', 'Категория была создана');
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
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        Category::find($id)->update([
            'title' => $request->title,
            'image' => $request->image,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_text' => $request->seo_text,
            'seo_ld' => $request->seo_ld,
            'slug' => Str::slug($request->title)
        ]);
        return redirect()->route('admin.category.index')->with('message', 'Категория была изменена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('admin.category.index')->with('message', 'Категория была удалена');
    }
}
