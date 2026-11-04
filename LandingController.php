<?php

namespace App\Http\Controllers;

class LandingController extends Controller
{
    public function home()
    {
        return view('landing.layouts.index');
    }

    public function shop()
    {
        return view('landing.layouts.shop');
    }

    public function detail()
    {
        return view('landing.layouts.detail');
    }

    public function cart()
    {
        return view('landing.layouts.cart');
    }

    public function checkout()
    {
        return view('landing.layouts.checkout');
    }

    public function contact()
    {
        return view('landing.layouts.contact');
    }
}