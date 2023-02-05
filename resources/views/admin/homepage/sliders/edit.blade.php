@extends('layouts.admin.master')

@section('title')
    edit slider 
@endsection

@section('content')

<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">Edit Slider</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">dashboard</a></li>
                <li class="breadcrumb-item active">Edit Slider Section</li>
            </ol>
        </div>
    </div>
</div>

{{-- @include('admin.message') --}}

<!-- main body -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <form class="form" action="{{route('slider.update', $slider->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <input type="hidden" name="id" value="{{ $slider->id }}">
                    <input type="hidden" name="old_image" value="{{ $slider->image_url }}">

                    <div class="form-group">
                        <div class="text-center">
                            <img src="{{asset($slider->image_url)}}"
                                class="rounded-circle  h-25 w-25" alt="image slider">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>slider image</label>
                        <label class="file center-block">
                            <input type="file" id="file" name="image_url">
                            <span class="file-custom"></span>
                        </label>
                        @error('image_url')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-body">
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label>title en</label>
                                <input type="text" name="title" value="{{$slider->getTranslation('title', 'ar')}}" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>title ar</label>
                                <input type="text" name="title_ar" value="{{$slider->getTranslation('title', 'ar')}}" class="form-control @error('title_ar') is-invalid @enderror" value="{{ old('title_ar') }}" required>
                                @error('title_ar')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>sub title en</label>
                                <input type="text" name="sub_title" value="{{$slider->getTranslation('sub_title', 'en')}}" class="form-control @error('sub_title') is-invalid @enderror" value="{{ old('sub_title') }}" required>
                                @error('sub_title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>sub title en</label>
                                <input type="text" name="sub_title_ar" value="{{$slider->getTranslation('sub_title', 'ar')}}" class="form-control @error('sub_title_ar') is-invalid @enderror" value="{{ old('sub_title_ar') }}" required>
                                @error('sub_title_ar')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>button en</label>
                                <input type="text" name="button" value="{{$slider->getTranslation('button', 'en')}}" class="form-control @error('button') is-invalid @enderror" value="{{ old('button') }}" required>
                                @error('button')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>button_ar</label>
                                <input type="text" name="button_ar" value="{{$slider->getTranslation('button', 'ar')}}" class="form-control @error('button_ar') is-invalid @enderror" value="{{ old('button_ar') }}" required>
                                @error('button_ar')
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


