@extends('layouts.admin.master')

@section('title')
    Add Interior section
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            @include('admin.message')

            <div class="card">
                <div class="card-header">
                    <h3>Interior  Section</h3>
                </div>
                
                <div class="card-body">
                    <form action="{{route('interior_Section.store')}}" method="POST">
                    @csrf

                        <div class="form-body">
                            {{-- <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>head en</label>
                                    <input type="text" name="head" class="form-control @error('head') is-invalid @enderror" value="{{ old('head') }}" required>
                                    @error('head')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>head ar</label>
                                    <input type="text" name="head_ar" class="form-control @error('head_ar') is-invalid @enderror" value="{{ old('head_ar') }}" required>
                                    @error('head_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div> --}}

                            {{-- <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>sub head en</label>
                                    <input type="text" name="sub_head" class="form-control @error('sub_head') is-invalid @enderror" value="{{ old('sub_head') }}" required>
                                    @error('sub_head')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>sub head ar</label>
                                    <input type="text" name="sub_head_ar" class="form-control @error('sub_head_ar') is-invalid @enderror" value="{{ old('sub_head_ar') }}" required>
                                    @error('sub_head_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div> --}}

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>interior title en</label>
                                    <input type="text" name="interior_title" class="form-control @error('interior_title') is-invalid @enderror" value="{{ old('interior_title') }}" required>
                                    @error('interior_title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>interior title ar</label>
                                    <input type="text" name="interior_title_ar" class="form-control @error('interior_title_ar') is-invalid @enderror" value="{{ old('interior_title_ar') }}" required>
                                    @error('interior_title_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>description en</label>
                                    <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}" required>
                                    @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>description ar</label>
                                    <input type="text" name="description_ar" class="form-control @error('description_ar') is-invalid @enderror" value="{{ old('description_ar') }}" required>
                                    @error('description_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>button en</label>
                                    <input type="text" name="button" class="form-control @error('button') is-invalid @enderror" value="{{ old('button') }}" required>
                                    @error('button')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>button_ar</label>
                                    <input type="text" name="button_ar" class="form-control @error('button_ar') is-invalid @enderror" value="{{ old('button_ar') }}" required>
                                    @error('button_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Icon</label>
                                    <input type="text" name="icon" class="form-control @error('icon') is-invalid @enderror" value="{{ old('icon') }}">
                                    @error('icon')
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


