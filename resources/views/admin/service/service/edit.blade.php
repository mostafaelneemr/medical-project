@extends('layouts.admin.master')

@section('title')
    edit service 
@endsection

@section('content')

<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">Edit service</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">dashboard</a></li>
                <li class="breadcrumb-item active">Edit Service Section</li>
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
                <form class="form" action="{{route('service.update', $services->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <input type="hidden" name="id" value="{{ $services->id }}">
                    <input type="hidden" name="old_image" value="{{ $services->image }}">

                    <div class="form-group">
                        <div class="text-center">
                            <img src="{{asset($services->image)}}"
                                class="rounded-circle  h-25 w-25" alt="image slider">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <label class="file center-block">
                            <input type="file" id="file" name="image"> <span class="file-custom"></span>
                        </label>
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>head en</label>
                                <input type="text" name="head" value="{{$services->getTranslation('head', 'en')}}" class="form-control @error('head') is-invalid @enderror" value="{{ old('title') }}" required>
                                @error('head')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>head ar</label>
                                <input type="text" name="head_ar" value="{{$services->getTranslation('head', 'ar')}}" class="form-control @error('head_ar') is-invalid @enderror" value="{{ old('title_ar') }}" required>
                                @error('head_ar')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>  

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>title en</label>
                                <input type="text" name="title" value="{{$services->getTranslation('title', 'en')}}" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>title ar</label>
                                <input type="text" name="title_ar" value="{{$services->getTranslation('title', 'ar')}}" class="form-control @error('title_ar') is-invalid @enderror" value="{{ old('title_ar') }}" required>
                                @error('title_ar')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>  

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>description en</label>
                                <input type="text" name="description" value="{{$services->getTranslation('description', 'en')}}" class="form-control @error('description') is-invalid @enderror" value="{{ old('title') }}" required>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>description ar</label>
                                <input type="text" name="description_ar" value="{{$services->getTranslation('description', 'ar')}}" class="form-control @error('description_ar') is-invalid @enderror" value="{{ old('title_ar') }}" required>
                                @error('description_ar')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>  

                        <div class="form-row">
                            <div class="form-group col-md-12">
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


