@extends('frontend.master')
@section('titlepage')
<title>ប្រភេទដំណាំ | ដាំអ្វី</title>
@section('title', 'Products List')
<link rel="stylesheet" href="{{asset('css/product-list.css')}}">
<div class="background">
    <img src="img/2.jpg" alt="">
    <div class="text-center">
        <p>ប្រភេទដំណាំ</p>
    </div>
</div>
<section id="product">
  <div class="container-fluid product-body">
      <div class="row">
            <div class="container">
              <h1 style="text-align: center">{{$productstype->name}}</h1>
              <br>
              <div class="card-deck">
                @foreach ($allproducts as $products)
                @if($products->productstype_id == $productstype->id)
                <div class="col mb-4">
                  <div class="card mx-auto">
                    <img src="{{asset("images/".$products->img_url)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                    </div>
                  </div>
                </div>
                @endif
                @endforeach
             </div>
             <div class="back">
              <a href="{{ route('products') }}">◀ ត្រឡប់ទៅកាន់ប្រភេទដំណាំ</a>
            </div>
            </div>
        </div>
      </div>
</section>