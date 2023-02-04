@extends('layouts.admin.master')

@section('title')
    Products-section
@endsection


@section('content')

    <div class="row">
        <div class="col-md-12 ">

            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3> Products Section
                        <a  href="{{url('product/create')}}" class="btn btn-primary text-white float-start m-4">
                            Add Product

                        </a>
                    </h3>

                </div>

                <div class="card-body ">

                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title_ar</th>
                            <th>Title_en</th>
                            <th>Image</th>
                            <th>Title_des_ar</th>
                            <th>Title_des_en</th>
                            <th>price_ar</th>
                            <th>price_en</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($products as $productItem)
                            <tr>
                                <td>{{$loop->index +1}}</td>

                                <td>{{$productItem->title_ar}}</td>
                                <td>{{$productItem->title_en}}</td>

                                <td>
                                    <img src="{{asset('backend/images/products/' .$productItem->image)}}" style="width: 70px; height: 70px" alt="">
                                </td>


                                <td>{{$productItem->title_des_ar}}</td>
                                <td>{{$productItem->title_des_en}}</td>
                                <td>{{$productItem->price_ar}}</td>
                                <td>{{$productItem->price_en}}</td>

                                <td>
                                    <a href="{{url('product/edit'.$productItem->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{url('product/delete'.$productItem->id)}}" class="btn btn-danger btn-sm" title="Delete" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>

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




