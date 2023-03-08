@extends('layouts.admin.master')

@section('title')
    Cart Section
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 ">

            @include('admin.message')

            <div class="card">
                <div class="card-header">
                    <h3> Carts Section
                        <a href="{{route('service-cart.create')}}" class="btn btn-primary text-white float-start m-4">Add Cart</a>
                    </h3>
                </div>

                <div class="card-body ">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>description</th>
                                <th>Publish</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>     
                        @foreach($carts as $cart)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{asset($cart->image)}}" style="width: 150px; height: 100px" alt=""></td>
                                <td>{{$cart->title}}</td>
                                <td>{{$cart->description}}</td>
                                <td class={{$cart->publish == 1 ? 'text-success':'text-danger'}}>{{$cart->publish == 1 ? 'published' : 'draft'}}</td>
                                <td>
                                    <a href="{{route('service-cart.edit', $cart->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('service-cart.destroy', $cart->id)}}" class="btn btn-danger btn-sm" title="Delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
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
