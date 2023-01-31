<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];

        return view('home.index', compact('data'));
    }

    public function page($slug)
    {
        $data = [];

        $data['page'] = Page::where('slug', $slug)->first();

        dd($data['page']->slug . ' slug');
    }
}
