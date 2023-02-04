
@extends('layouts.admin.master')


@section('title')
    Edit Section
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>   Edit
                        <a href="{{url('customer')}}" class="btn btn-danger text-white float-start ml-3">
                            BACK

                        </a>
                    </h3>

                </div>

                <div class="card-body">

                    @if($errors->any())
                        <div class="alert alert-warning">

                            @foreach($errors->all() as $error)
                                <div>{{$error}}</div>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{url('customer/update'.$customer->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label>Description_ar</label>
                            <input type="text" name="description_ar" value="{{$customer->description_ar}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label>Description_en</label>
                            <input type="text" name="description_en" value="{{$customer->description_en}}" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label>Customer_name_ar</label>
                            <input type="text" name="customer_name_ar" value="{{$customer->customer_name_ar}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label>Customer_name_en</label>
                            <input type="text" name="customer_name_en" value="{{$customer->customer_name_en}}" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label>Title_ar</label>
                            <input type="text" name="title_ar" value="{{$customer->title_ar}}" class="form-control" id="exampleInputPassword1">
                        </div>


                        <div class="mb-3">
                            <label>Title_en</label>
                            <input type="text" name="title_en" value="{{$customer->title_en}}" class="form-control" id="exampleInputPassword1">
                        </div>


                        <div class="mb-3">
                            <label>Button_ar</label>
                            <input type="text" name="button_ar" value="{{$customer->button_ar}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label>Button_en</label>
                            <input type="text" name="button_en" value="{{$customer->button_en}}" class="form-control" id="exampleInputPassword1">
                        </div>


                        <div class="mb-3">
                            <label>Image</label>
                            <input  type="file" name="image" value="{{$customer->image}}" class="form-control" id="image">
                        </div>


                        <button type="submit" class="btn btn-primary">Update</button>

                    </form>

                </div>
            </div>
        </div>

    </div>






@endsection



