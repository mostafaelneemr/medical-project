@extends('layouts.admin.master')

@section('title')
    newUpdate-section
@endsection


@section('content')

    <div class="row">
        <div class="col-md-12 ">

            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3> newUpdate Section
                        <a  href="{{url('newUpdate/create')}}" class="btn btn-primary text-white float-start m-4">
                            Add

                        </a>
                    </h3>

                </div>

                <div class="card-body ">

                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title_en</th>
                            <th>Title_en</th>
                            <th>Image</th>
                            <th>description_ar</th>
                            <th>description_en</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($newUpdates as $update)
                            <tr>
                                <td>{{$loop->index +1}}</td>

                                <td>{{$update->title_ar}}</td>
                                <td>{{$update->title_en}}</td>

                                <td>
                                    <img src="{{asset('backend/images/newUpdate/'.$update->image)}}" style="width: 70px; height: 70px" alt="">
                                </td>

                                <td>{{$update->date}}</td>
                                <td>{{$update->description_ar}}</td>
                                <th>{{$update->description_en}}</th>

                                <td>
                                    <a href="{{url('newUpdate/edit'.$update->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{url('newUpdate/delete'.$update->id)}}" class="btn btn-danger btn-sm" title="Delete" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>

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


