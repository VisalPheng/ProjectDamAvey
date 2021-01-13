@extends('frontend.master')
@section('title', 'Home')
@include ('frontend.carousel');
<link rel="stylesheet" href="{{asset('css/card.css')}}">
@section('titlepage')
<title>ទំព័រដើម | ដាំអ្វី</title>
@section('content')

    <!-- Monthly Popular -->
    <section id="monthlypopular">
      <div class="monthly-popular text-center">
        <div class="container">
          <h4>ដំណាំដែលពេញនិយមក្នុងខែនេះ</h4>
          <br>
          <div class="row row-cols-1 row-cols-md-3">
            @forelse ($allproducts as $products)
            <div class="col mb-4">
              <div class="card" style="width: 22em;margin:0 auto;">
                <img src="{{asset("images/".$products->img_url)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                </div>
              </div>
            </div>
            @empty
              <h4 style="text-align: center">No Products yet</h4>
            @endforelse
          </div>
        </div>
      </div>
    </section>
    <!--  -->

    <!-- Daily Popular -->
    <section id="dailypopular">
      <div class="daily-popular text-center">
        <div class="container">
          <h5>ដំណាំដែលពេញនិយមក្នុងថ្ងៃនេះ</h5>
          <br>
            <div class="row row-cols-1 row-cols-md-3">
              @forelse ($allproducts as $products)
              <div class="col mb-4">
                <div class="card" style="width: 18em;margin:0 auto;">
                  <img src="{{asset("images/".$products->img_url)}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                  </div>
                </div>
              </div>
              @empty
                <h5 style="text-align: center">No Products yet</h5>
              @endforelse
            </div>
        </div>
      </div>
    </section>
    <!--  -->

@endsection
