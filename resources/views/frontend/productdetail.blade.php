@extends('frontend.master')
@section('titlepage')
<title>{{$products->name}} | ដាំអ្វី</title>
@section('title', 'Products Detail')
<link rel="stylesheet" href="{{asset('css/product-detail.css')}}">

<!-- Background -->
<div class="background">
    <img src="{{asset("images/".$products->img_url)}}" alt="">
    <div class="text-center">
        <p>{{$products->name}}</p>
    </div>
</div>
<!--  -->
</section>

<!-- Product Body -->
<section id="productdetail">
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="product-desc">
                <p>{!!$products->description!!}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-side">
                <b>ឧបករណ៍ដាំដុះដែលអ្នកត្រូវការ:</b>
                <div class="row equipment">
                    <div class="col">
                        <div class="card">
                            <img src="img/dirt.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">ដីមានជីជាតិ</h5>
                              <a href="#" class="btn btn-info">ទិញឥឡូវនេះ</a>
                            </div>
                          </div>
                          <br>
                          <div class="card">
                            <img src="img/fertilizer.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">ជីសរីរាង្គ</h5>
                              <a href="#" class="btn btn-info">ទិញឥឡូវនេះ</a>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="img/pot.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">ផើង</h5>
                              <a href="#" class="btn btn-info">ទិញឥឡូវនេះ</a>
                            </div>
                          </div>
                          <br>
                          <div class="card">
                            <img src="img/bamboostand.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">ឈើទប់ដំណាំ</h5>
                              <a href="#" class="btn btn-info">ទិញឥឡូវនេះ</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--  -->