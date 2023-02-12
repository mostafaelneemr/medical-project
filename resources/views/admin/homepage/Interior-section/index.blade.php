@extends('layouts.admin.master')

@section('title')
    Interior-section
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12 ">

            @include('admin.message')

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
                                <th>ID</th>
                                <th>Title</th>
                                <th>Subtitle</th>
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
                                <td>{{$section->title}}</td>
                                <td>{{$section->subtitle}}</td>
                                <th>{{$section->interior_title}}</th>
                                <th>{{$section->description}}</th>
                                <td>{{$section->button}}</td>
                                <td>
                                    {{-- <a href="{{url('interior/edit'.$section->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a> --}}
                                    {{-- <a href="{{url('interior/delete'.$section->id)}}" class="btn btn-danger btn-sm" title="Delete" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a> --}}
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


