<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Redirect;
use App\Models\Monthly;
use Session;
Session_start();

class CustomerController extends Controller
{
    //
    public function login(Request $request){
        $student_id = $request->student_id;
        $password = $request->password;

        $result = Customer::where('student_id', $student_id)->where('password', $password)->first();

        if($result)
        {
            Session::put('id', $result->id);
            return Redirect::to('/');
        }
        else{
            return Redirect::to('/login');
        }

    }

    public function logout(Request $request)
    {
        $logout = $request->session()->flush();
        return Redirect::to('/');


    }

    public function monthly_subscribe(Request $request){
        $data = new Monthly();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->student_id = $request->student_id;
        $data->phone = $request->phone;
        $data->save();
        return Redirect::back();
    }

    public function registration(Request $request){
        $data = new Customer();
        $data->student_id = $request->student_id;
        $data->password = $request->password;
        $data->cpassword = $request->cpassword;

        $data->save();
        return Redirect::to('/');
    }
}
