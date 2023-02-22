<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug)
    {
        $data['page'] = Product::where('slug', $slug)->with('parent')->with('volume')->with('type')->with('viscosity')->with('brand')->first();
        $data['recom'] = Product::where('category_id', $data['page']->category_id)->get();
        return view('product.index', compact('data'));
    }

    public function cart()
    {
        $data['items'] = \Cart::getContent();

        $data['page'] = Page::find(7);

        return view('product.cart', compact('data'));
    }

    public function add(Request $req)
    {
        $product = Product::find($req->id);
        \Cart::add([
            'id' => $product->id,
            'quantity' => $req->qty,
            'name' => $product->title,
            'price' => $product->price,
            'attributes' => array(
                'image' => json_decode($product->images)[0]
            )
        ]);
        return ['code' => 200];
    }
}
