<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketBooking;
use Illuminate\Support\Facades\Redirect;

class Booking extends Controller
{
    //
    function Booking(Request $request){

        $booking = new TicketBooking();

        $booking->from = $request->from;
        $booking->to = $request->to;
        $booking->departure = $request->departure;

        $booking->save();
        return Redirect::to('/onlineTicket')->with('message', 'Ticket booked successfully');
    }
}
