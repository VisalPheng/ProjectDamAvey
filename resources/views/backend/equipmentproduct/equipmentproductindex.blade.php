@extends('adminlte::page')

@section('title', 'List All Products')

@section('content_header')
@stop

@section('content')
    <h1>Posts</h1>
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
            <th>Product_ID</th>
            <th>Equipment_ID</th>
            <th>Action</th>
        </tr>
        @foreach ($allequipmentproduct as $equipmentproduct)
        <tr>
            <td>{{$equipmentproduct->id}}</td>
            <td>{{$equipmentproduct->product_id}}</td>
            <td>{{$equipmentproduct->equipment_id}}</td>
            <td width="400px">
                <a href="{{ route('equipmentproduct.edit',$equipmentproduct->id) }}" class="btn btn-primary ">Edit</a>
                <a href="{{ route('equipmentproduct.delete',$equipmentproduct->id) }}" class="btn btn-danger ">Delete</a>
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
