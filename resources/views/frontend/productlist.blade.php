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
        <div class="col-md-2">
          <div class="container">
            <p style="font-size: 36px;">ដំណាំ</p>
          <ul>
              <li><a href="">ដំណាំស្រូវ</a></li>
              <li><a href="">ដំណាំបន្លែ</a></li>
              <li><a href="">ដំណាំហូបផ្លែ</a></li>
              <li><a href="">ដំណាំកៅស៊ូ</a></li>
              <li><a href="">ដំណាំផ្សិត</a></li>
          </ul>
          </div>
        </div>

        <div class="col-md-10">
          <div class="container">
            <div class="card-deck">
              @forelse ($allproducts as $products)
              <div class="col mb-4">
                <div class="card mx-auto">
                  <img src="{{asset("images/".$products->img_url)}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                  </div>
                </div>
              </div>
              @empty
              <h1>No products yet</h1>
              @endforelse
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
