<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Monthly;

class SuperAdminController extends Controller
{
    //
    function showDashboardPage(){
        $this->AdminAuthCheck();
        return view('Backend/index');
    }

    public function subscription(){
        $data = Monthly::all();
        return view("Backend/monthly", compact('data'));
    }

    public function logout(){
        Session::flush();
        return Redirect::to('/admin');
    }

    public function AdminAuthCheck(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return;
        }
        else{
            return Redirect::to('/admin')->send();
        }
    }
}
