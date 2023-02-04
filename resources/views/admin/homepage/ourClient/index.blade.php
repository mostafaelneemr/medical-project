@extends('layouts.admin.master')

@section('title')
    ourClient-Section
@endsection


@section('content')

    <div class="row">
        <div class="col-md-12 ">

            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3> ourClient Section
                        <a  href="{{url('ourClient/create')}}" class="btn btn-primary text-white float-start m-4">
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
                            <th>Company_name_ar</th>
                            <th>Company_name_en</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($ourClient as $our)
                            <tr>
                                <td>{{$loop->index +1}}</td>


                                <td>{{$our->title_ar}}</td>
                                <td>{{$our->title_en}}</td>

                                <td>
                                    <img src="{{asset('backend/images/ourClient/'.$our->image)}}" style="width: 70px; height: 70px" alt="">
                                </td>

                                <td>{{$our->company_name_ar}}</td>
                                <td>{{$our->company_name_en}}</td>

                                <td>
                                    <a href="{{url('ourClient/edit'.$our->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{url('ourClient/delete'.$our->id)}}" class="btn btn-danger btn-sm" title="Delete" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>

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


