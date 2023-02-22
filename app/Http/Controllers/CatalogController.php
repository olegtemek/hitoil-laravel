<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Http\Filters\ProductFilter;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Viscosity;
use App\Models\Volume;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(ProductFilter $req, $slug)
    {

        $data = [];
        $data['page'] = Category::where('slug', $slug)->first();

        $data['products'] = Product::where('category_id', $data['page']->id)->filter($req);


        $data['products'] = $data['products']->paginate(25);

        $data['filters'] = [
            'types' => Type::all(),
            'viscosities' => Viscosity::all(),
            'volumes' => Volume::all(),
            'brands' => Brand::all()
        ];

        return view('oil.catalog', compact('data'));
    }
}
