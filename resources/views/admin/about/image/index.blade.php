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
                        <a  href="{{route('image-section.create')}}" class="btn btn-primary text-white float-start m-4">Add Image</a>
                    </h3>
                </div>

                <div class="card-body ">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>publish</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($images as $image)
                            <tr>
                                <td>{{$loop->index +1}}</td>
                                <td><img src="{{ asset($image->image) }}" style="width: 100px; height: 100px" alt=""></td>
                                <td class={{$image->publish == 1 ? 'text-success':'text-danger'}}>{{$image->publish == 1 ? 'published' : 'draft'}}</td>
                                <td>
                                    <a href="{{route('image-section.edit',$image->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('image-section.destroy',$image->id)}}" class="btn btn-danger btn-sm" title="Delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
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



