
@extends('layouts.admin.master')


@section('title')
    Edit Section
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3> Edit Section
                        <a href="{{url('product')}}" class="btn btn-danger text-white float-start ml-3">
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

                    <form action="{{url('product/update'.$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label>Title_ar</label>
                            <input type="text" name="title_ar" value="{{$product->title_ar}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label>Title_en</label>
                            <input type="text" name="title_en" value="{{$product->title_en}}" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label>Title_des_ar</label>
                            <input type="text" name="title_des_ar" value="{{$product->title_des_ar}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label>Title_des_en</label>
                            <input type="text" name="title_des_en" value="{{$product->title_des_en}}" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label>Price_ar</label>
                            <input type="text" name="price_ar" value="{{$product->price_ar}}" class="form-control" id="exampleInputPassword1">
                        </div>


                        <div class="mb-3">
                            <label>Price_en</label>
                            <input type="text" name="price_en" value="{{$product->price_en}}" class="form-control" id="exampleInputPassword1">
                        </div>


                        <div class="mb-3">
                            <label>Image</label>
                            <input  type="file"  name="image" value="{{$product->image}}" class="form-control" id="image">
                        </div>


                        <button type="submit" class="btn btn-primary">Update</button>

                    </form>

                </div>
            </div>
        </div>

    </div>






@endsection



