@extends('layouts.admin.master')

@section('title')
    Create Image
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            @include('admin.message')

            <div class="card">
                <div class="card-header"><h3>Image Section</h3></div>

                <div class="card-body">
                    <form class="form" action="{{route('images.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
    
                        <div class="form-group">
                            <label>Image</label>
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
                                    <label>title en</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                                    @error('image')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label>title ar</label>
                                    <input type="text" name="title_ar" class="form-control @error('title_ar') is-invalid @enderror" value="{{ old('title_ar') }}" required>
                                    @error('title_ar')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>button en</label>
                                    <input type="text" name="button" class="form-control @error('button') is-invalid @enderror" value="{{ old('title') }}" required>
                                    @error('button')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label>button ar</label>
                                    <input type="text" name="button_ar" class="form-control @error('button_ar') is-invalid @enderror" value="{{ old('title_ar') }}" required>
                                    @error('button_ar')
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
