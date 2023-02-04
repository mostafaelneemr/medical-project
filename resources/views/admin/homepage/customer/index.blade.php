@extends('layouts.admin.master')

@section('title')
    customer-section
@endsection


@section('content')

    <div class="row">
        <div class="col-md-12 ">

            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3> Customer Section
                        <a  href="{{url('customer/create')}}" class="btn btn-primary text-white float-start m-4">
                            Add

                        </a>
                    </h3>

                </div>

                <div class="card-body ">

                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Description_ar</th>
                            <th>Description_en</th>
                            <th>Customer_name_ar</th>
                            <th>Customer_name_en</th>
                            <th>Image</th>
                            <th>Title_ar</th>
                            <th>Title_en</th>
                            <th>button_ar</th>
                            <th>button_en</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($customers as $customer)
                            <tr>
                                <td>{{$loop->index +1}}</td>

                                <td>{{$customer->description_ar}}</td>
                                <td>{{$customer->description_en}}</td>
                                <td>{{$customer->customer_name_ar}}</td>
                                <td>{{$customer->customer_name_en}}</td>

                                <td>
                                    <img src="{{asset('backend/images/customer/'.$customer->image)}}" style="width: 70px; height: 70px" alt="">
                                </td>

                                <td>{{$customer->title_ar}}</td>
                                <td>{{$customer->title_en}}</td>

                                <td>{{$customer->button_ar}}</td>
                                <td>{{$customer->button_en}}</td>
                                <td>
                                    <a href="{{url('customer/edit'.$customer->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{url('customer/delete'.$customer->id)}}" class="btn btn-danger btn-sm" title="Delete" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>

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




