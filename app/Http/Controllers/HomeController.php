<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        return view('frontend.home');
=======
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
>>>>>>> c10d972cdb7263abaf33bd2d641daf791f95b2b9
    }
}
