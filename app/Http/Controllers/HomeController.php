<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

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

    public function products(products $products)
    {
        $allproducts = Products::all();
        return view('frontend.productlist')->with(["allproducts"=>$allproducts]);
    }

    public function productsbyregion()
    {
        return view('frontend.productregion');
    }
}
