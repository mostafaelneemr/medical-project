@extends('layouts.admin.master')

@section('title')
    Edit Product
@endsection

@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">Edit Product</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">dashboard</a></li>
                <li class="breadcrumb-item active">edit Product section</li>
            </ol>
        </div>
    </div>
</div>

@include('admin.message')

<!-- main body -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <form class="form" action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <input type="hidden" name="id" value="{{$product->id}}" /> 
                    <input type="hidden" name="old_value" value="{{$product->image}}" /> 

                    <div class="form-group">
                        <div class="text-center">
                            <img src="{{asset($product->image)}}"
                                class="rounded-circle h-25 w-25" alt="image">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Product image</label>
                        <label id="projectinput" class="file center-block">
                            <input type="file" id="file" name="image">
                            <span class="file-custom"></span>
                        </label>
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>title en</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $product->getTranslation('title', 'en') }}" required>
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>title ar</label>
                                <input type="text" name="title_ar" class="form-control @error('title_ar') is-invalid @enderror" value="{{ $product->getTranslation('title', 'ar') }}" required>
                                @error('title_ar')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-row">
                            
                            <div class="form-group col-md-6">
                                <label>price</label>
                                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ $product->price }}" required>
                                @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label>publish / draft</label>
                                <select name="publish" class="select2 form-control">
                                    <optgroup label="choose publish ablut post">
                                        <option value=1>publish</option>
                                        <option value=0>draft</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-warning mr-1" onclick="history.back();"><i class="ft-x"></i>back</button>
                        <button type="submit" class="btn btn-success"><i class="la la-check-square-o"></i>save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

