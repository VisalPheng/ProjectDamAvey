@extends('adminlte::page')

@section('title', 'Products Detail')

@section('content_header')
@stop
@section('content')

{{-- <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{asset("images/".$products->img_url)}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$products->name}}</h5>
      <p class="card-text">{{$products->description}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div> --}}

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="product-desc">
                <p>{!!$products->description!!}</p>
            </div>
        </div>
        <div class="col-md-4">
          <div class="col mb-4">
            <div class="card mx-auto">
              <img src="{{asset("images/".$products->img_url)}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
              </div>
            </div>
          </div>
            </div>
        </div>
    </div>
</div>
  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
