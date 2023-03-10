@extends('layouts.admin.master')

@section('title')
    Edit section
@endsection

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Edit Interior</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Interior Section</li>
                </ol>
            </div>
        </div>
    </div>

    @include('admin.message')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Interior Section</h3>
                </div>

                <div class="card-body">
                    <form action="{{route('interior_Section.update', $interiors->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
    
                            <input type="hidden" name="id" value="{{ $interiors->id }}" />
                            <input type="hidden" name="old_image" value="{{ $interiors->icon }}">

                            <div class="form-body">

                                <div class="form-group">
                                    <div class="text-center">
                                        <img src="{{ asset($interiors->icon ) }}"
                                            class="rounded-circle  h-25 w-25" alt="image">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <label class="file center-block">
                                        <input type="file" id="file" name="icon">
                                        <span class="file-custom"></span>
                                    </label>
                                    @error('icon')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
    
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>interior title en</label>
                                        <input type="text" name="interior_title" class="form-control @error('interior_title') is-invalid @enderror" value="{{$interiors->getTranslation('interior_title' , 'en') }}" required>
                                        @error('interior_title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
    
                                    <div class="form-group col-md-6">
                                        <label>interior title ar</label>
                                        <input type="text" name="interior_title_ar" class="form-control @error('interior_title_ar') is-invalid @enderror" value="{{ $interiors->getTranslation('interior_title' , 'ar') }}" required>
                                        @error('interior_title_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>description en</label>
                                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ $interiors->getTranslation('description' , 'en') }}" required>
                                        @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
    
                                    <div class="form-group col-md-6">
                                        <label>description ar</label>
                                        <input type="text" name="description_ar" class="form-control @error('description_ar') is-invalid @enderror" value="{{ $interiors->getTranslation('description' , 'ar')}}" required>
                                        @error('description_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>button en</label>
                                        <input type="text" name="button" class="form-control @error('button') is-invalid @enderror" value="{{ $interiors->getTranslation('button' , 'en') }}" required>
                                        @error('button')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
    
                                    <div class="form-group col-md-6">
                                        <label>button_ar</label>
                                        <input type="text" name="button_ar" class="form-control @error('button_ar') is-invalid @enderror" value="{{ $interiors->getTranslation('button' , 'ar') }}" required>
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



