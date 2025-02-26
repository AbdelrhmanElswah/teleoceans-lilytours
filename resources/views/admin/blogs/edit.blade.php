@extends('admin.partials._layout')
@section('content')


    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blogs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Blog</li>
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
                    <h3 class="card-title">Edit Blog</h3>

                </div>
                <!-- /.card-header -->
                <form action="{{route('blogs.update',$blog->id)}}" method="post" enctype="multipart/form-data">
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

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input name="title" value="{{$blog->title}}" class="form-control" type="text">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label >Image</label>
                                    <input class="imagee form-control" type="file" value="{{$blog->image}}" name="image" id="exampleInputFile">
                                </div>
                                <div class="form-group">
                                    <img src="{{asset('images/blogs/'.$blog->image.'')}}" style="width: 100px" class="img-thumbnail image-preview">
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>

                                    <textarea id="discription" name= "description" style="display: none;">  {{$blog->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>

                </form>


            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>


@endsection
