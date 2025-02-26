@extends('admin.partials._layout')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gallery</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Gallery</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Add Media for Programs</h3>

                </div>
                <!-- /.card-header -->
                <form action="{{route('media.program.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                @foreach($errors->all() as $error)
                                    {{ $error }}<br/>
                                @endforeach
                            </div>
                        @endif
                        <div class="row">

                            <div class="dz-default"></div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input name="title" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Program Title</label>
                                    <select name="program_id" class="form-control">
                                        <option>....</option>
                                        @foreach($programs as $program)
                                            <option value="{{$program->id}}">{{$program->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >Image</label>
                                    <input class="imagee form-control" type="file" name="image" id="exampleInputFile">
                                </div>
                                <div class="form-group">
                                    <img src="" style="width: 100px" class="img-thumbnail image-preview">
                                </div>

                            </div>
                        </div>
                        <!-- /.row -->

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </form>


            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>



    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">Gallery</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($media as $me)
                                <div class="col-sm-2">
                                    <a href="{{asset('images/programs/media/'.$me->image)}}" data-toggle="lightbox" data-title="{{$me->title}}" data-gallery="gallery">
                                        <img src="{{asset('images/programs/media/'.$me->image)}}" class="img-fluid mb-2" alt="white sample">
                                    </a>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a   title="delete Image" data-toggle="modal" data-media_program_id="{{ $me->id }}"
                                                 data-target="#media_program_delete" href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>

                                        <strong>{{$me->program->name}}</strong>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <div class="modal fade" id="media_program_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" id="media_program-action" action=" ">
                        @csrf
                        {{method_field('delete')}}
                        <div class="modal-body ">

                            Are you sure about Delete?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </section>


@endsection
