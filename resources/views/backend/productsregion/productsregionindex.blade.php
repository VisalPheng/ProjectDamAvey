@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
    <h1>Products by region posts</h1>
    @if(Session::has('updated'))
            <div class="alert alert-info">
              {{Session::get('updated')}}
            </div>
    @endif

    @if(Session::has('deleted'))
            <div class="alert alert-danger">
              {{Session::get('deleted')}}
            </div>
            @endif
    <table class="table table-bordered table-dark">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach ($allproductsregion as $productsregion)
        <tr>
            <td>{{$productsregion->id}}</td>
            <td width="300px">
                <img src="{{asset("images/".$productsregion->img_url)}}" alt="Image" class="img-responsive" width="100px">
            </td>
            <td>{{$productsregion->name}}</td>
            <td>{{$productsregion->description}}</td>
            <td width="200px">
                <a href="{{ route('productsregion.edit',$productsregion->id) }}" class="btn btn-primary ">Edit</a>
                <a href="{{ route('productsregion.delete',$productsregion->id) }}" class="btn btn-danger ">Delete</a>
            </td>
        </tr>
    @endforeach
    </table>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop