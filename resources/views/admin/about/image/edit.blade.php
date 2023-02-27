@extends('layouts.admin.master')

@section('title')
    Create Image
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            @include('admin.message')

            <div class="card">
                <div class="card-header"><h3>Images List</h3></div>

                <div class="card-body">
                    <form class="form" action="{{route('image-section.update', $images->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

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
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $images->getTranslation('title', 'en') }}" required>
                                    @error('image')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label>title ar</label>
                                    <input type="text" name="title_ar" class="form-control @error('title_ar') is-invalid @enderror" value="{{ $images->getTranslation('title', 'ar') }}" required>
                                    @error('title_ar')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
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
