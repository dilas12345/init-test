@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.product.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.product.fields.name') }}
                    </th>
                    <td>
                        {{ $product->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.description') }}
                    </th>
                    <td>
                        {!! $product->description !!}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.phone') }}
                    </th>
                    <td>
                        {!! $product->phone !!}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.email') }}
                    </th>
                    <td>
                        {!! $product->email !!}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.categories') }}
                    </th>
                    <td>
                        {!! $product->categories !!}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.image') }}
                    </th>
                    <td>
                        <!-- ${{ $product->image }} -->
                        <img src="/images/{{ Session::get('path') }}" width="300" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection