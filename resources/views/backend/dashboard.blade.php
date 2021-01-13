@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
    <div class="container text-center">
        <h1>Welcome Back!! What do you want to do?</h1>
    </div>
    <br>
    <div class="container text-center">
        <h4>Products</h4>
        <a href="{{ route('products.create') }}" class="btn btn-success">Create Products</a>
        <a href="{{ route('products.index') }}" class="btn btn-info">List Products</a>
    </div>
    <br>
    <div class="container text-center">
        <h4>Regions</h4>
        <a href="{{ route('productsregion.create') }}" class="btn btn-success">Create Regions</a>
        <a href="{{ route('productsregion.index') }}" class="btn btn-info">List Regions</a>
    </div>
    <br>
    <div class="container text-center">
        <h4>Products Type</h4>
        <a href="{{ route('productstype.create') }}" class="btn btn-success">Products Types</a>
        <a href="{{ route('productstype.index') }}" class="btn btn-info">List Products Types</a>
    </div>
@endsection