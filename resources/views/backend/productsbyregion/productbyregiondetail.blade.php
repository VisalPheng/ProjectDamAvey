@extends('adminlte::page')

@section('title', 'Create Products')

@section('content_header')
@stop

@section('content')

<div class="card" style="width: 18rem;">
      <h4 class="card-title">{{$region->name}}</h4>
    </div>

    <table class="table table-bordered table-dark">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

        @foreach ($allproducts as $products )

        @if ($products->productsbyregion_id == $region->id)
        <tr>
            <td>{{$products->id}}</td>
            <td width="300px">
                <img src="{{asset("images/".$products->img_url)}}" alt="Image" class="img-responsive" width="100px">
            </td>
            <td>{{$products->name}}</td>
            <td>{{$products->description}}</td>
            <td width="300px">
                <a href="{{ route('products.detail',$products->id) }}" class="btn btn-primary ">Detail</a>
                <a href="{{ route('products.edit',$products->id) }}" class="btn btn-primary ">Edit</a>
                <a href="{{ route('products.delete',$products->id) }}" class="btn btn-danger ">Delete</a>
            </td>
        </tr>
        @endif
    @endforeach
    </table>
  </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
