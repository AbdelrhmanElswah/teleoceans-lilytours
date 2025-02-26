@extends('admin.partials._layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Contact Us</h3>
                </div>
                @if($contact)



                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>



                            <tr>
                                <td>Email </td>
                                <td>{{ $contact->email}}</td>
                            </tr>
                            <tr>
                                <td>Phone Number </td>
                                <td>{{ $contact->number}}</td>
                            </tr>

                            <tr>
                                <td>Map Location </td>
                                <td>{{ $contact->map_location}}</td>
                            </tr>
                            <tr>
                                <td>Facebook </td>
                                <td>{{ $contact->facebook}}</td>
                            </tr>

                            <tr>
                                <td>Instagram </td>
                                <td>{{ $contact->instagram}}</td>
                            </tr>
                            <tr>
                                <td>Twitter </td>
                                <td>{{ $contact->twitter}}</td>
                            </tr>
                            <tr>
                                <td>Tripadvisor </td>
                                <td>{{ $contact->tripadvisor}}</td>
                            </tr>
                            <tr>
                                <td>YouTube </td>
                                <td>{{ $contact->youtube}}</td>
                            </tr>
                            <tr>
                                <td>Messenger </td>
                                <td>{{ $contact->messenger}}</td>
                            </tr>
                            <tr>
                                <td>Call us </td>
                                <td>{{ $contact->call}}</td>
                            </tr>
                            <tr>
                                <td>Links</td>
                                <td>{{ $contact->links}}</td>
                            </tr>

                            <tr>
                                <td>Address</td>
                                <td>{{ $contact->address}}</td>
                            </tr>

                            <tr>
                                <td>Footer Description</td>
                                <td>{{ $contact->footer}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        <a href="{{route('contacts.edit',1)}}" type="submit" class="btn btn-info pull-right">Edit</a>
                    </div>
                @else
                    <h1>No foud Data</h1>
                @endif
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection
