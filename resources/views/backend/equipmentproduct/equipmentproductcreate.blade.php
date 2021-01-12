@extends('adminlte::page')

@section('title', 'Create Products')

@section('content_header')
@stop

@section('content')
    <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1>Create Products</h1>
            @if(Session::has('success'))
            <div class="alert alert-success">
              {{Session::get('success')}}
            </div>
            @endif
            @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            <form action={{route('equipmentproduct.store')}} method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="region">Products</label>
                    <select class="form-control selectpicker" data-live-search="true" id="product_id" name="product_id" multiple>
                        @foreach ($allproducts as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="form-group">
                    <label for="productstype">Equipments</label>
                    <select class="form-control selectpicker" data-live-search="true" id="equipment_id" name="equipment_id" multiple>
                        @foreach ($allequipments as $equipment)
                        <option value="{{$equipment->id}}">{{$equipment->name}}</option>
                        @endforeach
                      </select>
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
    <script>
    $(document).ready(function(){
        $('.selectpicker').selectpicker();
    });
    </script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
      var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
      };
    </script>
    <script>
        CKEDITOR.replace('my-editor', options);
        </script>
@stop
