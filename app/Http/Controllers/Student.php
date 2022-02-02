<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Session;

class Student extends Controller
{
    private $account_details = ['FN', 'MI', 'LN', 'Mobile_Number', 'Gender', 'status'];
    public function Dashboard(){

        
        if(Session::has($this->account_details)){
            return view ('student_dashboard.dashboard');
        }
        
        else{
            return redirect('/');
        }
    }

    public function Settings(){

        if(Session::has($this->account_details)){
            return view ('student_dashboard.settings');
        }
        else{
            return redirect('/');
        }


    }
    
}