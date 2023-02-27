@extends('layouts.admin.master')

@section('title')
    Help Section
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 ">

            @include('admin.message')

            <div class="card">
                <div class="card-header">
                    <h3>Help Section List
                        @if (\app\Models\about\help::count() == 0)
                        <a href="{{route('help-section.create')}}" class="btn btn-primary text-white float-start m-4">Add Section</a>
                        @endif
                    </h3>
                </div>

                <div class="card-body ">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Sub_title</th>
                                <th>Head</th>
                                <th>Description</th>
                                <th>Publish</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>     
                        @foreach($helps as $help)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{ asset($help->image) }}" style="width: 150px; height: 100px" alt=""></td>
                                <td>{{$help->title}}</td>
                                <td>{{$help->sub_title}}</td>
                                <td>{{$help->head}}</td>
                                <td>{{$help->description}}</td>
                               <td class={{$help->publish == 1 ? 'text-success':'text-danger'}}>{{$help->publish == 1 ? 'published' : 'draft'}}</td>
                                <td>
                                    <a href="{{route('help-section.edit', $help->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('help-section.destroy', $help->id)}}" class="btn btn-danger btn-sm" title="Delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
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
