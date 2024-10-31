<?php

namespace App\Http\Controllers\Backend;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\TicketBooking;
use Session;
Session_start();


class showPage extends Controller
{
    //
    function showAdminLoginPage(){
        return view('Backend/adminLogin');
    }



    function show_DashboardPage(Request $request){
        $admin_email = $request->email;
        $admin_password = md5($request->password);
        $result = Admin::where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();

        if($result){
            Session::put('admin_id', $result->admin_id);
            Session::put('admin_name', $result->admin_name);
            return Redirect::to('/dashboard');
        }
        else{
            Session::put('message', 'Email or Password Invalid');
            return Redirect::to('/admin');
        }
    }

    function checkOrders(){
        $orders = TicketBooking::all();
        return view('Backend/Orders', compact('orders'));
    }
}
