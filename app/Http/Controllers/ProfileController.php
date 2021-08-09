<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Booking;
use Illuminate\Support\Facades\DB;
use Auth;

class ProfileController extends Controller
{
    //
    public function showProfile() {
        if(Auth::check()) {
            $id = Auth::user()->id;
            $tour = DB::table('bookings')
                    ->where('userID', 'like', '%'.$id.'%');
            $tour = $tour->get();
            return view('user.profile')->with('tour', $tour);
        }
        else {
            return redirect('/login');
        }
    }
}
