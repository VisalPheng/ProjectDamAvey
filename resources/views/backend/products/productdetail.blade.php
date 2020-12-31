@extends('adminlte::page')

@section('title', 'Create Products')

@section('content_header')
@stop

@section('content')

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{asset("images/".$products->img_url)}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$products->name}}</h5>
      <p class="card-text">{{$products->description}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
