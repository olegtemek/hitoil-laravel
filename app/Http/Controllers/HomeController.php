<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Base;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\Contact;
use App\Models\Factory;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Petrol;
use App\Models\Review;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        $data['page'] = Page::find(1);
        $data['partners'] = Partner::orderBy('id', 'DESC')->get();
        $data['certificates'] = Certificate::orderBy('id', 'DESC')->get();
        $data['reviews'] = Review::orderBy('id', 'DESC')->get();

        $data['factories'] = Factory::all();

        $data['petrols'] = Petrol::where('factory_id', $data['factories'][0]->id)->get();
        $data['bases'] = Base::all();

        return view('home.index', compact('data'));
    }

    public function page($slug)
    {
        $data = [];

        $data['page'] = Page::where('slug', $slug)->first();
        if ($data['page']->id == 1) {
            return redirect('/');
        }

        if ($data['page']->id == 2) {
            return view('delivery.index', compact('data'));
        }

        if ($data['page']->id == 3) {
            $data['sales'] = Sale::orderBy('id', 'DESC')->get();
            return view('sale.index', compact('data'));
        }
        if ($data['page']->id == 4) {
            $data['contact'] = Contact::find(1);
            return view('contact.index', compact('data'));
        }
        if ($data['page']->id == 5) {
            $data['factories'] = Factory::all();

            return view('cost.index', compact('data'));
        }

        if ($data['page']->id == 6) {
            $data['categories']  = Category::all();
            return view('oil.index', compact('data'));
        }

        return redirect('/');
    }

    public function getOil(Request $req)
    {
        $petrols = Petrol::where('factory_id', $req->oil['factoryId'])->where('base_id', $req->oil['type'])->get();
        $html = '';
        foreach ($petrols as $item) {
            $html .= view('components.petrol-row', ['item' => $item]);
        }

        return $html;
    }

    public function form(Request $req)
    {
        $mailData = [
            'name' => $req->name,
            'number' => $req->number,
            'factory_title' => $req->factory_title,
            'city_title' => $req->city_title,
            'product_title' => $req->product_title,
            'volume' => $req->volume,
            'product' => $req->product,
            'cart' => $req->cart
        ];





        FacadesMail::to(env('ADMIN_EMAIL'))->send(new SendMail($mailData));

        if ($mailData['cart']) {
            \Cart::clear();
        }
    }
}
