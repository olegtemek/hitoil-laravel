<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FilterRequest;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Viscosity;
use App\Models\Volume;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {
        if ($type == 0) {
            $title = 'брендам';
            $filters = Brand::all();
        } elseif ($type == 1) {
            $title = 'объему';
            $filters = Volume::all();
        } elseif ($type == 2) {
            $title = 'вязкости';
            $filters = Viscosity::all();
        } else {
            $title = 'тип';
            $filters = Type::all();
        }



        return view('admin.filter.index', compact('filters', 'title', 'type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type)
    {
        if ($type == 0) {
            $title = 'брендам';
        } elseif ($type == 1) {
            $title = 'объему';
        } elseif ($type == 2) {
            $title = 'вязкости';
        } else {
            $title = 'тип';
        }
        return view('admin.filter.create', compact('title', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FilterRequest $request, $type)
    {
        $data = ['title' => $request->title, 'value' => $request->value];
        if ($type == 0) {
            Brand::create($data);
        } elseif ($type == 1) {
            Volume::create($data);
        } elseif ($type == 2) {
            Viscosity::create($data);
        } else {
            Type::create($data);
        }
        return redirect()->route('admin.filter.index', $type)->with('message', 'Фильтр был добавлен');
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
    public function edit($type, $id)
    {
        if ($type == 0) {
            $filter = Brand::find($id);
        } elseif ($type == 1) {
            $filter = Volume::find($id);
        } elseif ($type == 2) {
            $filter = Viscosity::find($id);
        } else {
            $filter = Type::find($id);
        }


        return view('admin.filter.edit', compact('filter', 'type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FilterRequest $request, $type, $id)
    {

        $data = ['title' => $request->title, 'value' => $request->value];

        if ($type == 0) {
            Brand::find($id)->update($data);
        } elseif ($type == 1) {
            Volume::find($id)->update($data);
        } elseif ($type == 2) {
            Viscosity::find($id)->update($data);
        } else {
            Type::find($id)->update($data);
        }

        return redirect()->route('admin.filter.index', $type)->with('message', 'Фильтр был изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($type, $id)
    {
        if ($type == 0) {
            Brand::destroy($id);
        } elseif ($type == 1) {
            Volume::destroy($id);
        } elseif ($type == 2) {
            Viscosity::destroy($id);
        } else {
            Type::destroy($id);
        }
        return redirect()->route('admin.filter.index', $type)->with('message', 'Фильтр был удален');
    }
}
