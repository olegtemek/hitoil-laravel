<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        $data['page'] = Page::find(1);
        $data['partners'] = Partner::orderBy('id', 'DESC')->get();
        $data['certificates'] = Certificate::orderBy('id', 'DESC')->get();
        $data['reviews'] = Review::orderBy('id', 'DESC')->get();
        return view('home.index', compact('data'));
    }

    public function page($slug)
    {
        $data = [];

        $data['page'] = Page::where('slug', $slug)->first();

        dd($data['page']->slug . ' slug');
    }
}
