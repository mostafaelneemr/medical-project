@extends('layouts.admin.master')

@section('title')
    main section
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 ">

            @include('admin.message')

            <div class="card">
                <div class="card-header">
                    <h3> Main Section
                        <a href="{{route('main-section.create')}}" class="btn btn-primary text-white float-start m-4"> Add Section</a>
                    </h3>
                </div>

                <div class="card-body ">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Sub-title</th>
                                <th>Description</th>
                                <th>Button</th>
                                <th>Publish</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($main_section as $section)
                            <tr>
                                <td>{{$loop->index +1}}</td>
                                <td><img src="{{asset($section->image)}}" style="width: 150px; height: 100px" alt=""></td>
                                <td>{{$section->title}}</td>
                                <td>{{$section->subtitle}}</td>
                                <th>{{$section->description}}</th>
                                <td>{{$section->button}}</td>
                                <td class={{$section->publish == 1 ? 'text-success':'text-danger'}}>{{$section->publish == 1 ? 'published' : 'draft'}}</td>                               <td>
                                    <a href="{{route('main-section.edit', $section->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('main-section.destroy', $section->id)}}" class="btn btn-danger btn-sm" title="Delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
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

