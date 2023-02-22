<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug)
    {
        $data['page'] = Product::where('slug', $slug)->with('parent')->with('volume')->with('type')->with('viscosity')->with('brand')->first();





        return view('product.index', compact('data'));
    }
}
