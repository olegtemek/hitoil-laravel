<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Certificate;
use App\Models\Factory;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Petrol;
use App\Models\Review;
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

        $data['petrols'] = Petrol::where('factory_id', $data['factories'][0]->id)->where('type', false)->get();
        return view('home.index', compact('data'));
    }

    public function page($slug)
    {
        $data = [];

        $data['page'] = Page::where('slug', $slug)->first();

        dd($data['page']->slug . ' slug');
    }

    public function getOil(Request $req)
    {
        $petrols = Petrol::where('factory_id', $req->oil['factoryId'])->where('type', $req->oil['type'])->get();
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
            'number' => $req->number
        ];


        FacadesMail::to(env('ADMIN_EMAIL'))->send(new SendMail($mailData));


        return true;
    }
}
