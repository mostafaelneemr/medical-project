@extends('layouts.admin.master')

@section('title')
    Add Client
@endsection

@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">Create Client</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">dashboard</a></li>
                <li class="breadcrumb-item active">create Client section</li>
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
                <form class="form" action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label> Client image</label>
                        <label id="projectinput7" class="file center-block">
                            <input type="file" id="file" name="image" required>
                            <span class="file-custom"></span>
                        </label>
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>name en</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>name ar</label>
                                <input type="text" name="name_ar" class="form-control @error('name_ar') is-invalid @enderror" value="{{ old('name_ar') }}" required>
                                @error('name_ar')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>title name en</label>
                                <input type="text" name="title_name" class="form-control @error('title_name') is-invalid @enderror" value="{{ old('title_name') }}" required>
                                @error('title_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>title name ar</label>
                                <input type="text" name="title_name_ar" class="form-control @error('title_name_ar') is-invalid @enderror" value="{{ old('title_name_ar') }}" required>
                                @error('title_name_ar')
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

