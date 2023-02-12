@extends('layouts.admin.master')

@section('title')
  edit main section
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Section</h3>
                </div>

                <div class="card-body">

                    @include('admin.message')

                    <form action="{{route('main-section.update',$main_section->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
    
                        <input type="hidden" name="id" value="{{ $main_section->id }}">
                        <input type="hidden" name="old_image" value="{{ $main_section->image }}">
    
                        <div class="form-group">
                            <div class="text-center">
                                <img src="{{asset($main_section->image)}}"
                                    class="rounded-circle  h-25 w-25" alt="image slider">
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label>slider image</label>
                            <label class="file center-block">
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
                                    <input type="text" name="title" value="{{$main_section->getTranslation('title', 'en')}}" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label>title ar</label>
                                    <input type="text" name="title_ar" value="{{$main_section->getTranslation('title', 'ar')}}" class="form-control @error('title_ar') is-invalid @enderror" value="{{ old('title_ar') }}" required>
                                    @error('title_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>  

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>sub title en</label>
                                    <input type="text" name="subtitle" value="{{$main_section->getTranslation('subtitle', 'en')}}" class="form-control @error('subtitle') is-invalid @enderror" value="{{ old('subtitle') }}" required>
                                    @error('subtitle')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label>sub title ar</label>
                                    <input type="text" name="subtitle_ar" value="{{$main_section->getTranslation('subtitle_ar', 'ar')}}" class="form-control @error('subtitle_ar') is-invalid @enderror" value="{{ old('subtitle_ar') }}" required>
                                    @error('subtitle_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>  

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>description en</label>
                                    <input type="text" name="description" value="{{$main_section->getTranslation('description', 'en')}}" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}" required>
                                    @error('subtitle')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label>description ar</label>
                                    <input type="text" name="description_ar" value="{{$main_section->getTranslation('description', 'ar')}}" class="form-control @error('description_ar') is-invalid @enderror" value="{{ old('description_ar') }}" required>
                                    @error('description_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>  
    
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>button en</label>
                                    <input type="text" name="button" value="{{$main_section->getTranslation('button', 'en')}}" class="form-control @error('button') is-invalid @enderror" value="{{ old('button') }}" required>
                                    @error('button')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label>button_ar</label>
                                    <input type="text" name="button_ar" value="{{$main_section->getTranslation('button', 'ar')}}" class="form-control @error('button_ar') is-invalid @enderror" value="{{ old('button_ar') }}" required>
                                    @error('button_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
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


