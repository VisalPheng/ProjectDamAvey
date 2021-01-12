@extends('adminlte::page')

@section('title', 'List all Products Type')

@section('content_header')
@stop

@section('content')
    <h1>Products By Type Posts</h1>
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
            <th>Type</th>
            <th>Description</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
        @foreach ($productstype as $protype)
        <tr>
            <td>{{$protype->id}}</td>
            <td>{{$protype->name}}</td>
            <td>{{$protype->description}}</td>
            <td>{{$protype->created_at}}</td>
            <td width="300px">
                <a href="{{ route('productstype.detail',$protype->id) }}" class="btn btn-primary ">Detail</a>
                <a href="{{ route('productstype.edit',$protype->id) }}" class="btn btn-primary ">Edit</a>
                <a href="{{ route('productstype.delete',$protype->id) }}" class="btn btn-danger ">Delete</a>
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
