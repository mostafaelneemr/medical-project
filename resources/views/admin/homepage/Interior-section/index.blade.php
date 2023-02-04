@extends('layouts.admin.master')

@section('title')
    Interior-section
@endsection


@section('content')

    <div class="row">
        <div class="col-md-12 ">

            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3> Interior Section
                        <a  href="{{url('interior/create')}}" class="btn btn-primary text-white float-start m-4">
                            Add Section

                        </a>
                    </h3>

                </div>

                <div class="card-body ">

                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title_ar</th>
                            <th>Title_en</th>
                            <th>Subtitle_ar</th>
                            <th>Subtitle_en</th>
                            <th>Image</th>
                            <th>Interior_title_ar</th>
                            <th>Interior_title_en</th>
                            <th>description_ar</th>
                            <th>description_en</th>
                            <th>Button_ar</th>
                            <th>Button_en</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($interior_section as $section)
                            <tr>
                                <td>{{$loop->index +1}}</td>
                                <td>{{$section->title_ar}}</td>
                                <td>{{$section->title_en}}</td>
                                <td>{{$section->subtitle_ar}}</td>
                                <td>{{$section->subtitle_en}}</td>

                                <td>
                                    <img src="{{asset('backend/images/interior/' .$section->image)}}" style="width: 70px; height: 70px" alt="">
                                </td>

                                <th>{{$section->interior_title_ar}}</th>
                                <th>{{$section->interior_title_en}}</th>
                                <th>{{$section->description_ar}}</th>
                                <th>{{$section->description_en}}</th>
                                <td>{{$section->button_ar}}</td>
                                <td>{{$section->button_en}}</td>

                                <td>
                                    <a href="{{url('interior/edit'.$section->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{url('interior/delete'.$section->id)}}" class="btn btn-danger btn-sm" title="Delete" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>

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


