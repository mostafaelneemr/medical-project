@extends('layouts.admin.master')

@section('title')
    Products Section
@endsection


@section('content')

    <div class="row">
        <div class="col-md-12 ">

            @include('admin.message')

            <div class="card">
                <div class="card-header">
                    <h3>Product List
                            <a href="{{route('products.create')}}" class="btn btn-primary text-white float-start m-4">Add Product</a>
                    </h3>
                </div>

                <div class="card-body ">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Publish</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>     
                        @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{ asset($product->image) }}" style="width: 150px; height: 100px" alt=""></td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->price}}</td>
                               <td class={{$product->publish == 1 ? 'text-success':'text-danger'}}>{{$product->publish == 1 ? 'published' : 'draft'}}</td>
                                <td>
                                    <a href="{{route('products.edit', $product->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('products.destroy', $product->id)}}" class="btn btn-danger btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
