@extends('layouts.admin.master')

@section('title')
    Client Section
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 ">

            @include('admin.message')

            <div class="card">
                <div class="card-header">
                    <h3>Client List
                        <a href="{{route('clients.create')}}" class="btn btn-primary text-white float-start m-4">Add Client</a>
                    </h3>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Title name</th>
                                <th>Publish</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>     
                        @foreach($clients as $client)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{$client->image}}" style="width: 150px; height: 100px" alt=""></td>
                                <td>{{$client->name}}</td>
                                <td>{{$client->title_name}}</td>
                               <td class={{$client->publish == 1 ? 'text-success':'text-danger'}}>{{$client->publish == 1 ? 'published' : 'draft'}}</td>
                                <td>
                                    <a href="{{route('clients.edit', $client->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('clients.destroy', $client->id)}}" class="btn btn-danger btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
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
