<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Session;

class Teacher extends Controller
{
    private $account_details = ['FN', 'MI', 'LN', 'Dept_ID', 'status'];

    public function Teacher_Dashboard(){

        
        if(Session::has($this->account_details)){
            return view ('teacher_dashboard.dashboard');
        }
        
        else{
            return redirect('teacher_login');
        }
    }

    public function Teacher_Settings(){

        if(Session::has($this->account_details)){
            return view ('teacher_dashboard.settings');
        }
        else{
            return redirect('teacher_login');
        }

    }

    public function Teacher_Analytics(){
        
        if(Session::has($this->account_details)){
            return view ('teacher_dashboard.analytics');
        }
        else{
            return redirect('teacher_analytics');
        }
    }

    
    
}