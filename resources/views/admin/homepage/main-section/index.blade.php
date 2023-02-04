@extends('layouts.admin.master')

@section('title')
    main-section
@endsection


@section('content')
    
    <div class="row">
        <div class="col-md-12 ">

            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3> Main Section
                        <a  href="{{url('main/create')}}" class="btn btn-primary text-white float-start m-4">
                            Add Section

                        </a>
                    </h3>

                </div>

                <div class="card-body ">

                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title_en</th>
                            <th>Title_en</th>
                            <th>Subtitle_ar</th>
                            <th>Subtitle_en</th>
                            <th>Title_details_ar</th>
                            <th>Title_details_en</th>
                            <th>Button_ar</th>
                            <th>Button_en</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($main_section as $section)
                            <tr>
                                <td>{{$loop->index +1}}</td>

                                <td>
                                    <img src="{{asset('backend/images/main/'.$section->image)}}" style="width: 70px; height: 70px" alt="">
                                </td>

                                <td>{{$section->title_ar}}</td>
                                <td>{{$section->title_en}}</td>
                                <td>{{$section->subtitle_ar}}</td>
                                <td>{{$section->subtitle_en}}</td>
                                <th>{{$section->title_details_ar}}</th>
                                <th>{{$section->title_details_en}}</th>
                                <td>{{$section->button_ar}}</td>
                                <td>{{$section->button_en}}</td>

                                <td>
                                    <a href="{{url('main/edit'.$section->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{url('main/delete'.$section->id)}}" class="btn btn-danger btn-sm" title="Delete" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>

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

