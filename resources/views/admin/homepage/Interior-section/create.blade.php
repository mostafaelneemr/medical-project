
@extends('layouts.admin.master')


@section('title')
    Interior  section
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3> Interior  Section
                        <a href="{{url('interior')}}" class="btn btn-danger text-white float-start ml-3">
                            BACK

                        </a>
                    </h3>

                </div>

                <div class="card-body">

                    @if($errors->any())
                        <div class="alert alert-warning">

                            @foreach($errors->all() as $error)
                                <div>{{$error}}</div>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{url('interior/store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label>Title_ar</label>
                            <input type="text" name="title_ar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label>Title_en</label>
                            <input type="text" name="title_en" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label>Subtitle_ar</label>
                            <input type="text" name="subtitle_ar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label>Subtitle_en</label>
                            <input type="text" name="subtitle_en" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label>Interior_title_ar</label>
                            <input type="text" name="interior_title_ar" class="form-control" id="exampleInputPassword1">
                        </div>


                        <div class="mb-3">
                            <label>Interior_title_en</label>
                            <input type="text" name="interior_title_en" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label>Description_ar</label>
                            <input type="text" name="description_ar" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label>Description_en</label>
                            <input type="text" name="description_en" class="form-control" id="exampleInputPassword1">
                        </div>


                        <div class="mb-3">
                            <label>Button_ar</label>
                            <input type="text" name="button_ar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label>Button_en</label>
                            <input type="text" name="button_en" class="form-control" id="exampleInputPassword1">
                        </div>


                        <div class="mb-3">
                            <label>Image</label>
                            <input  type="file" name="image" class="form-control" id="image">
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>

    </div>






@endsection


