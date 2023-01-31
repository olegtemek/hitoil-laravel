<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Http\Filters\ProductFilter;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(ProductFilter $req, $slug)
    {

        $data = [];
        $data['category'] = Category::where('slug', $slug)->first();

        $data['products'] = Product::where('category_id', $data['category']->id)->filter($req);




        $data['products'] = $data['products']->get();


        dd($data['products']);
    }
}
