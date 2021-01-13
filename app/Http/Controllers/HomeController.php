<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\ProductsRegion;
use App\Models\Productstype;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home(products $products)
    {
        $allproducts = Products::paginate(3);
        return view('frontend.homepage',["allproducts"=>$allproducts]);
    }

    public function products(products $products, Productstype $productstype)
    {
        $allproductstype = Productstype::all();
        $allproducts = Products::all();
        return view('frontend.productlist',["allproducts"=>$allproducts],["allproductstype"=>$allproductstype]);
    }

    public function productsbyregion(ProductsRegion $productsRegion, products $products)
    {
        $allproducts = Products::all();
        $allproductsRegion = ProductsRegion::all();
        return view('frontend.productregion',["allproducts"=>$allproducts],["allproductsRegion"=>$allproductsRegion]);
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
    public function productscategory($id, products $products, Productstype $productstype)
    {
        $productstype = Productstype::find($id);
        $allproductstype = Productstype::all();
        $allproducts = products::all();
        return view('frontend.productcategory', ['productstype' => $productstype], ["allproducts"=>$allproducts],["allproductstype"=>$allproductstype] );
    }
    public function regionscategory($id, products $products, ProductsRegion $productsRegion)
    {
        $productsRegion = ProductsRegion::find($id);
        $allproductsRegion = ProductsRegion::all();
        $allproducts = products::all();
        return view('frontend.regioncategory', ['productsRegion' => $productsRegion], ["allproducts"=>$allproducts],["allproductsRegion"=>$allproductsRegion] );
    }
    public function aboutus()
    {
        return view('frontend.aboutus');
    }
}
