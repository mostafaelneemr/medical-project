@extends('layouts.admin.master')

@section('title')
    Interior-section
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 ">

            @include('admin.message')

            {{-- <div class="card">
                <div class="card-header">
                    <h3> Interior Section
                        <button class="btn btn-primary" data-toggle="modal" data-target="#AddCategories">Create head title</button>
                    </h3>
                    
                </div>
                @include('admin.homepage.Interior-section.head_create')

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Head</th>
                                <th>Sub Head</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($interiors as $section)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$section->head}}</td>
                                <td>{{$section->sub_head}}</td>
                                <td>
                                    <a href="{{route('interior_Section.edit',$section->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('interior_Section.destroy',$section->id)}}" class="btn btn-danger btn-sm" title="Delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div> --}}

            <div class="card">
                <div class="card-header">
                    <h3> Interior Section
                        <a href="{{route('interior_Section.create')}}" class="btn btn-primary text-white float-start m-4">Add Section</a>
                    </h3>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Interior title</th>
                                <th>description</th>
                                <th>Button</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($interiors as $section)
                            <tr>
                                <td>{{$loop->index +1}}</td>
                                <td>{{$section->icon}}</td>
                                <th>{{$section->interior_title}}</th>
                                <th>{{$section->description}}</th>
                                <td>{{$section->button}}</td>
                                <td>
                                    <a href="{{route('interior_Section.edit',$section->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('interior_Section.destroy',$section->id)}}" class="btn btn-danger btn-sm" title="Delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')  
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" 
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" 
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
@endsection