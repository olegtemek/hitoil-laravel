<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OilRequest;
use App\Models\Factory;
use App\Models\Oil;
use Illuminate\Http\Request;

class OilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oils = Oil::with('factory')->orderBy('id', 'desc')->get();
        return view('admin.oil.index', compact('oils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $factories = Factory::all();
        return view('admin.oil.create', compact('factories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OilRequest $request)
    {
        Oil::create([
            'title' => $request->title,
            'price' => $request->price,
            'volume' => $request->volume,
            'factory_id' => $request->factory_id,
            'image' => $request->image,
            'passport' => $request->passport,
        ]);
        return redirect()->route('admin.oil.index')->with('message', 'Масло было успешно добавлено');
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
        $oil = Oil::find($id);
        $factories = Factory::all();
        return view('admin.oil.edit', compact('oil', 'factories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OilRequest $request, $id)
    {
        Oil::find($id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'volume' => $request->volume,
            'factory_id' => $request->factory_id,
            'image' => $request->image,
            'passport' => $request->passport,
        ]);
        return redirect()->route('admin.oil.index')->with('message', 'Масло было успешно изменено');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Oil::destroy($id);
        return redirect()->route('admin.oil.index')->with('message', 'Масло было успешно удаленно');
    }
}
