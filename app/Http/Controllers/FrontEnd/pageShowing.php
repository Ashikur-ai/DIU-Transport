<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Session;
use App\Models\TicketBooking;
Session_start();

class pageShowing extends Controller
{
    //
    function showIndex(){
        return view('Frontend/index');
    }

    function purchaseHistory(){
        $data  = TicketBooking::all();
        return view('Frontend/history', compact('data'));
    }

    function showDriverPage(){
        return view('Frontend/driver');
    }

    function showSchedulePage(){
        return view('Frontend/busSchedule');
    }

    function showOnlineTicketPage(){
        return view('Frontend/onlineTicket');
    }

    function showUserLoginPage(){
        return view('Frontend/login');
    }

    function showUserRegisterPage(){
        return view('Frontend/register');
    }

    function showUserDashboardPage(Request $request){
        $user_email = $request->email;
        $user_password = md5($request->password);
        $result = User::where('email', $user_email)->where('password', $user_password)->first();

        if($result){
            Session::put('admin_id', $result->user_email);
            Session::put('admin_name', $result->user_name);
            return Redirect::to('/');
        }
        else{
            Session::put('message', 'Email or Password Invalid');
            return Redirect::to('/login');
        }
    }


}
