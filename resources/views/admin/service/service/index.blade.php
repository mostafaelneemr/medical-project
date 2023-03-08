@extends('layouts.admin.master')

@section('title')
    Service Section
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 ">

            @include('admin.message')

            <div class="card">
                <div class="card-header">
                    <h3> Service Section
                        <a href="{{route('service.create')}}" class="btn btn-primary text-white float-start m-4">Add Slider</a>
                    </h3>
                </div>

                <div class="card-body ">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>head</th>
                                <th>Title</th>
                                <th>description</th>
                                <th>Publish</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>     
                        @foreach($services as $service)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{asset($service->image)}}" style="width: 150px; height: 100px" alt=""></td>
                                <td>{{$service->head}}</td>
                                <td>{{$service->title}}</td>
                                <td>{{$service->description}}</td>
                                <td class={{$service->publish == 1 ? 'text-success':'text-danger'}}>{{$service->publish == 1 ? 'published' : 'draft'}}</td>
                                <td>
                                    <a href="{{route('service.edit', $service->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('service.destroy', $service->id)}}" class="btn btn-danger btn-sm" title="Delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
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
