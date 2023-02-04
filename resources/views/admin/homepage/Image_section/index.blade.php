@extends('layouts.admin.master')

@section('title')
    Image-section
@endsection


@section('content')

    <div class="row">
        <div class="col-md-12 ">

            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3> Image Section
                        <a  href="{{url('image/create')}}" class="btn btn-primary text-white float-start m-4">
                            Add Image

                        </a>
                    </h3>

                </div>

                <div class="card-body ">

                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title_ar</th>
                            <th>Title_en</th>
                            <th>button_ar</th>
                            <th>button_en</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($image_section as $section)
                            <tr>
                                <td>{{$loop->index +1}}</td>

                                <td>
                                    <img src="{{asset('backend/images/image.section/' .$section->image)}}" style="width: 70px; height: 70px" alt="">
                                </td>

                                <td>{{$section->title_ar}}</td>
                                <td>{{$section->title_en}}</td>
                                <td>{{$section->button_ar}}</td>
                                <td>{{$section->button_en}}</td>

                                <td>
                                    <a href="{{url('image/edit'.$section->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{url('image/delete'.$section->id)}}" class="btn btn-danger btn-sm" title="Delete" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>

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



