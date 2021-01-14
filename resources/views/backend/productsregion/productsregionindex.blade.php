@extends('adminlte::page')

@section('title', 'List All Regions')

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
            <th>Region</th>
            <th>Description</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
        @foreach ($allproductsregion as $productsregion)
        <tr>
            <td>{{$productsregion->id}}</td>
            <td>{{$productsregion->name}}</td>
            <td>{!!Str::limit($productsregion->description, 300, ' (...)')!!}</td>
            <td width="100px">{{$productsregion->created_at}}</td>
            <td width="300px">
                <a href="{{ route('productsregion.detail',$productsregion->id) }}" class="btn btn-info ">Detail</a>
                <a href="{{ route('productsregion.edit',$productsregion->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('productsregion.delete',$productsregion->id) }}" class="btn btn-danger ">Delete</a>
            </td>
        </tr>
    @endforeach
    </table>
    <div class="d-flex justify-content-center">
        {!! $allproductsregion->links() !!}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
