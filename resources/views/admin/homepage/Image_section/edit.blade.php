@extends('layouts.admin.master')

@section('title')
    Edit Image
@endsection

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Edit Image</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Image Section</li>
                </ol>
            </div>
        </div>
    </div>

    @include('admin.message')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Image Section</h3>
                </div>

                <div class="card-body">
                    <form class="form" action="{{route('images.update', $images->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="id" value="{{ $images->id }}">
                        <input type="hidden" name="old_image" value="{{ $images->image }}">
    
                        <div class="form-group">
                            <div class="text-center">
                                <img src="{{asset($images->image)}}"
                                    class="rounded-circle  h-25 w-25" alt="image slider">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Image</label>
                            <label id="projectinput7" class="file center-block"> 
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
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$images->getTranslation('title', 'en')}}" required>
                                    @error('image')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label>title ar</label>
                                    <input type="text" name="title_ar" class="form-control @error('title_ar') is-invalid @enderror" value="{{$images->getTranslation('title', 'ar')}}" required>
                                    @error('title_ar')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>button en</label>
                                    <input type="text" name="button" class="form-control @error('button') is-invalid @enderror" value="{{ $images->getTranslation('button', 'en') }}" required>
                                    @error('button')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label>button ar</label>
                                    <input type="text" name="button_ar" class="form-control @error('button_ar') is-invalid @enderror" value="{{ $images->getTranslation('button', 'ar') }}" required>
                                    @error('button_ar')
                                    <span class="text-danger">{{$message}}</span>
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



