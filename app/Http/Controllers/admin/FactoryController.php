<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FactoryRequest;
use App\Models\Factory;
use Illuminate\Http\Request;

class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factories = Factory::orderBy('id', 'desc')->get();
        return view('admin.factory.index', compact('factories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.factory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FactoryRequest $request)
    {
        Factory::create([
            'title' => $request->title,
            'oil_file' => $request->oil_file,
            'petrol_file' => $request->petrol_file,
            'all_file' => $request->all_file
        ]);
        return redirect()->route('admin.factory.index')->with('message', 'Завод был успешно добавлен');
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
        $factory = Factory::find($id);
        return view('admin.factory.edit', compact('factory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Factory::find($id)->update([
            'title' => $request->title,
            'oil_file' => $request->oil_file,
            'petrol_file' => $request->petrol_file,
            'all_file' => $request->all_file
        ]);
        return redirect()->route('admin.factory.index')->with('message', 'Завод был успешно изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Factory::destroy($id);
        return redirect()->route('admin.factory.index')->with('message', 'Завод был успешно удален');
    }
}
