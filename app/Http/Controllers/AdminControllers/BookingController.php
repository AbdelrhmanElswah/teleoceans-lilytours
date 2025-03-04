<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
class BookingController extends Controller
{
    protected $model;

    public function __construct(Booking $model)
    {
        return $this->model = $model;
    }

    public function index()
    {
       $bookings = $this->model->with('program')->get(); 

        return view('admin.booking.index', compact('bookings'));
    }

    public function destroy($id)
{
    $booking = Booking::findOrFail($id);
    $booking->delete();

    return redirect()->route('admin.bookings.index')->with('success', 'Booking deleted successfully.');
}

}
