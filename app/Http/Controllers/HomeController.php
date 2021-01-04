<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\ProductsRegion;

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

    public function productsbyregion(ProductsRegion $productsRegion, products $products)
    {
        $allproducts = Products::all();
        return view('frontend.productregion')->with(["allproducts"=>$allproducts]);
    }
    public function productdetail($id, products $products)
    {
        $products = Products::find($id);
        return view('frontend.productdetail', ['products' =>$products]);
    }
    public function dashboard()
    {
        return view('backend.dashboard');
    }
}
