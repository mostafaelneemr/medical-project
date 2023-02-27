@extends('layouts.admin.master')

@section('title')
    Customer Section
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 ">

            @include('admin.message')

            <div class="card">
                <div class="card-header">
                    <h3>Customer List
                        <a href="{{route('customers.create')}}" class="btn btn-primary text-white float-start m-4">Add customer</a>
                    </h3>
                </div>

                <div class="card-body ">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Customer name</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Publish</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>     
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{ asset($customer->image) }}" style="width: 150px; height: 100px" alt=""></td>
                                <td>{{$customer->customer_name}}</td>
                                <td>{{$customer->title}}</td>
                                <td>{{$customer->description}}</td>
                               <td class={{$customer->publish == 1 ? 'text-success':'text-danger'}}>{{$customer->publish == 1 ? 'published' : 'draft'}}</td>
                                <td>
                                    <a href="{{route('customers.edit', $customer->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('customers.destroy', $customer->id)}}" class="btn btn-danger btn-sm" title="Delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
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
