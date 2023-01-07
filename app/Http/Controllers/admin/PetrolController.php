<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PetrolRequest;
use App\Models\Factory;
use App\Models\Petrol;
use Illuminate\Http\Request;

class PetrolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petrols = Petrol::with('factory')->orderBy('id', 'desc')->get();
        return view('admin.petrol.index', compact('petrols'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $factories = Factory::all();
        return view('admin.petrol.create', compact('factories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PetrolRequest $request)
    {
        Petrol::create([
            'title' => $request->title,
            'price' => $request->price,
            'volume' => $request->volume,
            'factory_id' => $request->factory_id,
            'passport' => $request->passport,
        ]);
        return redirect()->route('admin.petrol.index')->with('message', 'Бензин был успешно добавлен');
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
        $petrol = Petrol::find($id);
        $factories = Factory::all();
        return view('admin.petrol.edit', compact('petrol', 'factories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PetrolRequest $request, $id)
    {
        Petrol::find($id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'volume' => $request->volume,
            'factory_id' => $request->factory_id,
            'passport' => $request->passport,
        ]);
        return redirect()->route('admin.petrol.index')->with('message', 'Бензин был успешно изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Petrol::destroy($id);
        return redirect()->route('admin.petrol.index')->with('message', 'Бензин был успешно удален');
    }
}
