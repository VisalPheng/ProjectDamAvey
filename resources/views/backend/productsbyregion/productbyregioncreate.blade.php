@extends('adminlte::page')

@section('title', 'Create Products')

@section('content_header')
@stop

@section('content')
    <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1>Create Products by region</h1>
            @if(Session::has('success'))
            <div class="alert alert-success">
              {{Session::get('success')}}
            </div>
            @endif
            <form action={{route('productsbyregion.store')}} method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Name <span class="require"></label>
                    <input type="text" class="form-control" id="pname" name="name" />
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea rows="5" class="form-control" id="pdesc" name="description" ></textarea>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Create
                    </button>
                    <button class="btn btn-default">
                        Cancel
                    </button>
                </div>

            </form>
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
