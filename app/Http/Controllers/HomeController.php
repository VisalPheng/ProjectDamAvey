<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('frontend.homepage');
    }

    public function products()
    {
        return view('frontend.productlist');
    }

    public function productsbyregion()
    {
        return view('frontend.productregion');
    }
}
