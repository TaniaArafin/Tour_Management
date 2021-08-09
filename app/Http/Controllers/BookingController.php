<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;
use Auth;
use PDF;
use Barryvdh\Snappy;

class BookingController extends Controller
{
    //
    function showBookingPage($id) {
        $package = Package::find($id);
        if(Auth::check()) {
            return view('booking')
                    ->with('package', $package);
        }
        else {
            return redirect('login');
        }
    }

    public function addBooking(Request $request) {
        $last = DB::table('bookings')->orderBy('id', 'DESC')->limit(1)->value('id');


        $booking = new Booking([
            "userID" => $request->get('userID'),
            "userName" => $request->get('userName'),
            "userEmail" => $request->get('userEmail'),
            "userContact" => $request->get('userContact'),
            "userID" => $request->get('userID'),
            "tourID" => $request->get('tourID'),
            "tourName" => $request->get('tourName'),
            "tourDuration" => $request->get('tourDuration'),
            "travelDate" => $request->get('travelDate'),
            "transportation" => $request->get('transportation'),
            "food" => $request->get('food'),
            "hotel" => $request->get('hotel'),
            "price" => $request->get('price')
        ]);

        $booking->save();
        return view('bookingConfirm')->with('id', $last+1);
    }

    public function showReceipt($id) {
        $booking = Booking::find($id);
        return view('test')->with('booking', $booking);
    }

    public function downloadReceipt($id) {
        $booking = Booking::find($id);
        $pdf = PDF::loadView('test', compact('booking'));
        return $pdf->download('BookingReceipt.pdf');
    }
}
