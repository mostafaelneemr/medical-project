@extends('layouts.admin.master')

@section('title')
    Images Section
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 ">

            @include('admin.message')

            <div class="card">
                <div class="card-header">
                    <h3> Image Section
                        <a  href="{{route('images.create')}}" class="btn btn-primary text-white float-start m-4">Add Image</a>
                    </h3>
                </div>

                <div class="card-body ">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>button</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($images as $section)
                            <tr>
                                <td>{{$loop->index +1}}</td>
                                <td><img src="{{$section->image}}" style="width: 100px; height: 100px" alt=""></td>
                                <td>{{$section->title}}</td>
                                <td>{{$section->button}}</td>
                                <td>
                                    <a href="{{route('images.edit',$section->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('images.destroy',$section->id)}}" class="btn btn-danger btn-sm" title="Delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
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



