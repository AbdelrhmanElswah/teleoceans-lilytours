@extends('admin.partials._layout')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>All Bookings</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Bookings</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Bookings List</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 200px;">
                                <input type="text" id="search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="button" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Program Name</th>
                                    <th>Promo Code</th>
                                    <th>Add-ons</th>
                                    <th>Date</th>
                                    <th>Adults</th>
                                    <th>Children</th>
                                    <th>Message</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bookings as $booking)
                                    <tr>
                                        <td>{{ $booking->id }}</td>
                                        <td>{{ $booking->name }}</td>
                                        <td>{{ $booking->email }}</td>
                                        <td>{{ $booking->number }}</td>
                                        <td>{{ $booking->program->name ?? '' }}</td>
                                        <td>{{ $booking->promo_code ?? '' }}</td>
                                        <td>{{ $booking->addons ?? 'None' }}</td>
                                        <td>{{ $booking->date }}</td>
                                        <td>{{ $booking->adult }}</td>
                                        <td>{{ $booking->child }}</td>
                                        <td>{{ $booking->message }}</td>
                                        <td>
                                            <button class="btn btn-danger btn-sm delete-booking" data-id="{{ $booking->id }}">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteBookingModal" tabindex="-1" aria-labelledby="deleteBookingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteBookingModalLabel">Confirm Deletion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this booking?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Delete Functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.delete-booking').forEach(button => {
            button.addEventListener('click', function () {
                let bookingId = this.getAttribute('data-id');
                let deleteForm = document.getElementById('deleteForm');
                deleteForm.setAttribute('action', `/admin/bookings/${bookingId}`);
                $('#deleteBookingModal').modal('show');
            });
        });
    });
</script>

@endsection
