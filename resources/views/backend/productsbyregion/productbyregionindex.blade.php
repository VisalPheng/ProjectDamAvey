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
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

        @foreach ($region as $allregion)
        <tr>
            <td>{{$allregion->id}}</td>
            <td>{{$allregion->name}}</td>
            <td>{{$allregion->description}}</td>
            <td width="200px">
                <a href="{{ route('productsbyregion.detail',$allregion->id) }}" class="btn btn-primary ">Detail</a>
                <a href="{{ route('productsregion.edit',$allregion->id) }}" class="btn btn-primary ">Edit</a>
                <a href="{{ route('productsregion.delete',$allregion->id) }}" class="btn btn-danger ">Delete</a>
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
