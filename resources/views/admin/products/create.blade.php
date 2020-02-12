@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('global.product.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.products.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.product.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($product) ? $product->name : '') }}">
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">{{ trans('global.product.fields.description') }}</label>
                <textarea id="description" name="description" class="form-control ">{{ old('description', isset($product) ? $product->description : '') }}</textarea>
                @if($errors->has('description'))
                    <p class="help-block">
                        {{ $errors->first('description') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.description_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                <label for="phone">{{ trans('global.product.fields.phone') }}</label>
                <input type="number" id="phone" name="phone" class="form-control "value="{{ old('phone', isset($product) ? $product->phone : '') }}">
                @if($errors->has('phone'))
                    <p class="help-block">
                        {{ $errors->first('phone') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.phone_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">{{ trans('global.product.fields.email') }}</label>
                <input type="text" id="email" name="email" class="form-control "value="{{ old('email', isset($product) ? $product->email : '') }}">
                @if($errors->has('email'))
                    <p class="help-block">
                        {{ $errors->first('email') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.email_helper') }}
                </p>
            </div>
            
            <!-- <div class="form-group {{ $errors->has('categories') ? 'has-error' : '' }}">
                <label for="categories">{{ trans('global.product.fields.categories') }}</label>
                <input type="text" id="categories" name="categories" class="form-control" value="{{ old('categories', isset($product) ? $product->categories : '') }}" step="0.01">
                @if($errors->has('categories'))
                    <p class="help-block">
                        {{ $errors->first('categories') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.categories_helper') }}
                </p>
            </div> -->
            <div class="form-group {{ $errors->has('categories') ? 'has-error' : '' }}">
                <div class="form-group {{ ($errors->has('roll'))?'has-error':'' }}">
                <label for="categories">{{ trans('global.product.fields.categories') }} <span class="required">*</span></label>
                <select name="categories" class="form-control" id="categories">
                    <option value="">-- Select Categories --</option>
                                            
                        <option value="web">Web</option>
                        <option value="mobile">Mobile</option>
                </select>
            </div>
            <!-- <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                <label for="image">{{ trans('global.product.fields.image') }}</label>
                <input type="text" id="image" name="image" class="form-control" value="{{ old('image', isset($product) ? $product->image : '') }}" step="0.01">
                @if($errors->has('image'))
                    <p class="help-block">
                        {{ $errors->first('image') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('global.product.fields.image_helper') }}
                </p>
            </div> -->
            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                <label for="image">Image</label>
                <div class="col-md-6">
                    <input id="image" type="file" class="form-control" name="image" value="{{ old('image', isset($product) ? $product->image : '') }}">
                    @if (auth()->user()->image)
                        <code>{{ auth()->user()->image }}</code>
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                    </div>
                    <img src="/images/{{ Session::get('path') }}" width="300" />
                    @endif
                </div>
                <p class="helper-block">
                    {{ trans('global.product.fields.image_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>