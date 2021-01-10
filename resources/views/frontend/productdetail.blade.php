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
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <a href="#" class="btn btn-primary">ទិញឥឡូវនេះ</a>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <a href="#" class="btn btn-primary">ទិញឥឡូវនេះ</a>
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