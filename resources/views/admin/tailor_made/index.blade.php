@extends('admin.partials._layout')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tailor Made Requests</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Tailor Made Requests</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Tailor Made Requests</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                           placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Nationality</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tailors as $tailor)

                                    <tr>
                                        <td>{{$tailor->id}}</td>
                                        <td>{{$tailor->name}}</td>
                                        <td>{{$tailor->email}}</td>
                                        <td>{{$tailor->number}}</td>
                                        <td>{{$tailor->nationality}}</td>
                                        <td class="text-left py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a title="Show {{$tailor->name}}"
                                                   href="{{route('tailors.show',$tailor->id)}}" class="btn btn-success"><i
                                                        class="fas fa-eye"></i></a>
                                                <a title="delete {{$tailor->name}}" data-toggle="modal"
                                                   data-tailor_id="{{ $tailor->id }}"
                                                   data-target="#tailor_delete" href="#" class="btn btn-danger"><i
                                                        class="fas fa-trash"></i></a>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->


        <div class="modal fade" id="tailor_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Tailor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" id="tailor-action" action=" ">
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
