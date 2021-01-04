@extends('frontend.master')
@section('titlepage')
<title>ដំណាំតាមតំបន់ | ដាំអ្វី</title>
@section('title', 'Products by Region')
<link rel="stylesheet" href="{{asset('css/product-list.css')}}">
<div class="background">
    <img src="img/3.jpg" alt="">
    <div class="text-center">
        <p>ដំណាំតាមតំបន់</p>
    </div>
</div>
<section id="product">
    <div class="container-fluid product-body">
        <div class="row">
          <div class="col-md-4">
            <div class="container catergory">
                <p style="font-size: 36px;">តំបន់</p>
            <ul>
                <li><a href="">តំបន់ខ្ពង់រាប</a></li>
                <li><a href="">តំបន់ទំនាប</a></li>
                <li><a href="">តំបន់នៅតាមបណ្តោយមាត់ទន្លេ ស្ទឹង</a></li>
                <li><a href="">តំបន់ភូមិភាគឦសាន</a></li>
            </ul>
            </div>
          </div>

            <div class="col-md-8">
              <div class="container">
                <div class="card-deck">
                  @forelse ($allproducts as $products)
                  <div class="col mb-4">
                    <div class="card mx-auto">
                      <img src="{{asset("images/".$products->img_url)}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><a href="">{{$products->name}}</a></h5>
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