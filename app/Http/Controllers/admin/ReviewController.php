<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use Database\Factories\ReviewFactory;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::orderBy('id', 'desc')->get();
        return view('admin.review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = null;
        if (!empty($request->title) || !empty($request->description)) {
            $data = $request->validate([
                'title' => 'required',
                'image' => 'required',
                'description' => 'required'
            ]);
            $type = true;
        } else {
            $data = $request->validate([
                'image' => 'required'
            ]);
            $type = false;
        }

        Review::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'type' => $type
        ]);

        return redirect()->route('admin.review.index')->with('message', 'Отзыв был успешно добавлен');
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
        $review = Review::find($id);
        return view('admin.review.edit', compact('review'));
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

        $type = null;
        if (!empty($request->title) && !empty($request->description)) {
            $data = $request->validate([
                'title' => 'required',
                'image' => 'required',
                'description' => 'required'
            ]);
            $type = true;
        } else {
            $data = $request->validate([
                'image' => 'required'
            ]);
            $type = false;
        }

        Review::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'type' => $type
        ]);

        return redirect()->route('admin.review.index')->with('message', 'Отзыв был успешно изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Review::destroy($id);
        return redirect()->route('admin.review.index')->with('message', 'Отзыв был успешно удален');
    }
}
