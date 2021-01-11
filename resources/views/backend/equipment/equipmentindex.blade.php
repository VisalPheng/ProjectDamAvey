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
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach ($allequipment as $equipment)
        <tr>
            <td>{{$equipment->id}}</td>
            <td width="300px">
                <img src="{{asset("images/".$equipment->img_url)}}" alt="Image" class="img-responsive" width="100px">
            </td>
            <td>{{$equipment->name}}</td>
            {{-- <td>{{$products->description}}</td> --}}
            <td>{!!Str::limit($equipment->description, 300, ' (...)')!!}</td>
            <td width="300px">
                <a href="{{ route('equipment.detail',$equipment->id) }}" class="btn btn-primary ">Detail</a>
                <a href="{{ route('equipment.edit',$equipment->id) }}" class="btn btn-primary ">Edit</a>
                <a href="{{ route('equipment.delete',$equipment->id) }}" class="btn btn-danger ">Delete</a>
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
