<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $data['recom'] = Product::OrderBy(DB::raw('RAND()'))->limit(10)->get();

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
                'image' => json_decode($product->images)[0],
                'url' => route('front.product.index', $product->slug),
            )
        ]);
        return ['code' => 200];
    }
    public function update(Request $req)
    {
        $data = [];
        $data['recom'] = Product::OrderBy(DB::raw('RAND()'))->limit(10)->get();

        \Cart::update(
            $req->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $req->qty
                ],
            ]
        );
        return ['code' => 200, 'html' => view('product.cart-info', ['items' => \Cart::getContent(), 'data' => $data])->render()];
    }

    public function destroy(Request $req)
    {
        $data = [];
        $data['recom'] = Product::OrderBy(DB::raw('RAND()'))->limit(10)->get();
        \Cart::remove($req->id);
        return ['code' => 200, 'html' => view('product.cart-info', ['items' => \Cart::getContent(), 'data' => $data])->render()];
    }

    public function destroyAll()
    {
        \Cart::clear();
        return redirect()->back();
    }
}
