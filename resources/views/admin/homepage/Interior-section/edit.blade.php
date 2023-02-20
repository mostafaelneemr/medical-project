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
                    <form action="{{route('interior_Section.update', $interiors->id)}}" method="POST">
                        @csrf
                        @method('PUT')
    
                            <input type="hidden" name="id" value="{{ $interiors->id }}" />

                            <div class="form-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>title en</label>
                                        <input type="text" name="head" class="form-control @error('head') is-invalid @enderror" value="{{ $interiors->getTranslation('head' , 'en') }}" required>
                                        @error('head')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
    
                                    <div class="form-group col-md-6">
                                        <label>title ar</label>
                                        <input type="text" name="head_ar" class="form-control @error('head_ar') is-invalid @enderror" value="{{ $interiors->getTranslation('head' , 'ar') }}" required>
                                        @error('head_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>sub title en</label>
                                        <input type="text" name="sub_head" class="form-control @error('sub_head') is-invalid @enderror" value="{{ $interiors->getTranslation('sub_head' , 'en')}}" required>
                                        @error('sub_head')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
    
                                    <div class="form-group col-md-6">
                                        <label>sub title ar</label>
                                        <input type="text" name="sub_head_ar" class="form-control @error('sub_head_ar') is-invalid @enderror" value="{{ $interiors->getTranslation('sub_head' , 'ar') }}" required>
                                        @error('sub_head_ar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
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
    
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Icon</label>
                                        <input type="text" name="icon" class="form-control @error('icon') is-invalid @enderror" value="{{ $interiors->icon }}">
                                        @error('icon')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
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



