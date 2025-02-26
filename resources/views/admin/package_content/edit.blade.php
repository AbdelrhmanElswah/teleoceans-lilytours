@extends('admin.partials._layout')
@section('content')


    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Package Contents</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Package Content</li>
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
                    <h3 class="card-title">Edit Package Content</h3>

                </div>
                <!-- /.card-header -->
                <form action="{{route('package.content.update',$content->id)}}" method="post">
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

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Content Name</label>
                                    <input name="name" value="{{$content->name}}" class="form-control" type="text">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Type Name</label>
                                    <select name="type" class="form-control">
                                        <option value="highlights" {{$content->type == 'highlights' ? 'selected' : ''}}> Highlights </option>
                                        <option value="sights" {{$content->type == 'sights' ? 'selected' : ''}}> Sights </option>
                                        <option value="includes" {{$content->type == 'includes' ? 'selected' : ''}}> Includes </option>
                                        <option value="excludes" {{$content->type == 'excludes' ? 'selected' : ''}}> Excludes </option>
                                    </select>
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
