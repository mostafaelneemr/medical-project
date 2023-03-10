@extends('layouts.admin.master')

@section('title')
    Edit Help Section
@endsection

@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">Edit Help Section</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">dashboard</a></li>
                <li class="breadcrumb-item active">edit help section</li>
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
                <form class="form" action="{{route('help-section.update', $help->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <input type="hidden" name="id" value="{{$help->id}}" /> 
                    <input type="hidden" name="old_value" value="{{$help->image}}" /> 

                    <div class="form-group">
                        <div class="text-center">
                            <img src="{{asset($help->image)}}"
                                class="rounded-circle  h-25 w-25" alt="image slider">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>image</label>
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
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $help->getTranslation('title', 'en') }}" required>
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>title ar</label>
                                <input type="text" name="title_ar" class="form-control @error('title_ar') is-invalid @enderror" value="{{ $help->getTranslation('title', 'ar') }}" required>
                                @error('title_ar')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>sub title en</label>
                                <input type="text" name="sub_title" class="form-control @error('sub_title') is-invalid @enderror" value="{{ $help->getTranslation('sub_title', 'en') }}" required>
                                @error('sub_title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>sub title ar</label>
                                <input type="text" name="sub_title_ar" class="form-control @error('sub_title_ar') is-invalid @enderror" value="{{ $help->getTranslation('sub_title', 'ar') }}" required>
                                @error('sub_title_ar')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>head en</label>
                                <input type="text" name="head" class="form-control @error('head') is-invalid @enderror" value="{{ $help->getTranslation('head', 'en') }}" required>
                                @error('head')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>head ar</label>
                                <input type="text" name="head_ar" class="form-control @error('head_ar') is-invalid @enderror" value="{{ $help->getTranslation('head', 'ar') }}" required>
                                @error('head_ar')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>description en</label>
                                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ $help->getTranslation('description', 'en') }}" required>
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>description ar</label>
                                <input type="text" name="description_ar" class="form-control @error('description_ar') is-invalid @enderror" value="{{ $help->getTranslation('description', 'ar') }}" required>
                                @error('description_ar')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                            
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

