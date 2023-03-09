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


        $products = Product::where('category_id', $data['page']->id)->get();

        $typeIds = [];
        $viscosityIds = [];
        $brandIds = [];
        $volumeIds = [];
        foreach ($products as $product) {
            array_push($typeIds, $product->type_id);
            array_push($brandIds, $product->brand_id);
            array_push($volumeIds, $product->volume_id);
            array_push($viscosityIds, $product->viscosity_id);
        }

        $typeIds = array_unique($typeIds);
        $viscosityIds = array_unique($viscosityIds);
        $brandIds = array_unique($brandIds);
        $volumeIds = array_unique($volumeIds);


        $data['products'] = $data['products']->paginate(25);

        $data['filters'] = [
            'types' => Type::whereIn('id', $typeIds)->get(),
            'viscosities' => Viscosity::whereIn('id', $viscosityIds)->get(),
            'volumes' => Volume::whereIn('id', $volumeIds)->get(),
            'brands' => Brand::whereIn('id', $brandIds)->get()
        ];

        return view('oil.catalog', compact('data'));
    }
}
