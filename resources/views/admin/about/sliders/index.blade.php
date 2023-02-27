@extends('layouts.admin.master')

@section('title')
    slider-section
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 ">

            @include('admin.message')

            <div class="card">
                <div class="card-header">
                    <h3> Slider List
                        @if (\app\Models\Slider::where('slider_type' , 'about')->count() == 0)
                            <a href="{{route('about-slider.create')}}" class="btn btn-primary text-white float-start m-4">Add Slider</a>
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
                                <th>Publish</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>     
                        @foreach($sliders as $slider)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{asset($slider->image_url)}}" style="width: 150px; height: 100px" alt=""></td>
                                <td>{{$slider->title}}</td>
                                <td class={{$slider->publish == 1 ? 'text-success':'text-danger'}}>{{$slider->publish == 1 ? 'published' : 'draft'}}</td>
                                <td>
                                    <a href="{{route('about-slider.edit', $slider->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('about-slider.destroy', $slider->id)}}" class="btn btn-danger btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
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
