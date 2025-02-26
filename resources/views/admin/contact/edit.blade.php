@extends('admin.partials._layout')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Contacts</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Contacts</li>
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
                    <h3 class="card-title">Edit Contacts</h3>

                </div>
                <!-- /.card-header -->
                <form action="{{route('contacts.update',1)}}" method="post">
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

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" value="{{$contact->email}}" class="form-control" type="email">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input name="number" value="{{$contact->number}}" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Map Location</label>
                                    <input name="map_location" value="{{$contact->map_location}}" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Faceebook</label>
                                    <input name="facebook" value="{{$contact->facebook}}" class="form-control" type="text">
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Instagram</label>
                                    <input name="instagram" value="{{$contact->instagram}}" class="form-control" type="text">
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Twitter</label>
                                    <input name="twitter" value="{{$contact->twitter}}" class="form-control" type="text">
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label></label>
                                    <input name="tripadvisor" value="{{$contact->tripadvisor}}" class="form-control" type="text">
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Youtube</label>
                                    <input name="youtube" value="{{$contact->youtube}}" class="form-control" type="text">
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Messenger</label>
                                    <input name="messenger" value="{{$contact->messenger}}" class="form-control" type="text">
                                </div>

                            </div>
                        </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>call us</label>

                                        <textarea id="small_discription" name="call" style="display: none;">  {{$contact->call}}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>

                                        <textarea id="price_details" name="address" style="display: none;">  {{$contact->address}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Links</label>

                                        <textarea id="program_discription" name="links" style="display: none;">  {{$contact->links}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Footer Description</label>

                                        <textarea id="discription" name="footer" style="display: none;">  {{$contact->footer}}</textarea>
                                    </div>
                                </div>
                            </div>
                        <!-- /.row -->
                        <hr>
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
