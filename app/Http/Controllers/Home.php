<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
class Home extends Controller
{
    public function CheckInputField(Request $req){
        
        $data = ['username' => 'required', 'password' => 'required'];
        //Validating the form if there's an Input Field that has no value
        if($req->validate($data)){

            //creating if/else statement if the user who logged is teacher or student

            if($req->input("type") == "1"){
            
                $teacher_data = array('USERNAME' => $req->get('username'),
                                   'PASSWORD' => $req->get('password'));
                $users = DB::table('teacher')
                        ->where('USERNAME','like', $teacher_data['USERNAME'])
                        ->where('PASSWORD','like', $teacher_data['PASSWORD'])
                        ->first();


                
                if($users){
                    $account_details = ['FN' => $users->FN,
                                        'MI' => $users->MI,
                                        'LN' => $users->LN,
                                        'Dept_ID' => $users->DEPT_ID,
                                        'status' => $users->IS_ACTIVE
                                    ];
                    $acc_details = session($account_details);
                    return redirect('teacher_dashboard');                
                }

                else{
                    $error_message = ['error_message' => 'Invalid Account Name Or Password'];
                    $error = session($error_message);
                    return redirect('teacher_login');
                }
            }

            else{

                
                $stud_data = array('USERNAME' => $req->get('username'),
                                   'PASSWORD' => $req->get('password'));
                $users = DB::table('student')
                        ->where('USERNAME','like', $stud_data['USERNAME'])
                        ->where('PASSWORD','like', $stud_data['PASSWORD'])
                        ->first();
               
               
                
                if($users){
                    $account_details = ['FN' => $users->FN,
                                        'MI' => $users->MI,
                                        'LN' => $users->LN,
                                        'Mobile_Number' => $users->MOBILE_NUMBER,
                                        'Gender' => $users->GENDER,
                                        'status' => $users->IS_ACTIVE
                                    ];
                    $acc_details = session($account_details);
                    return redirect('dashboard');                
                }

                else{
                    $error_message = ['error_message' => 'Invalid Account Name Or Password'];
                    $error = session($error_message);
                    return redirect('/');
                }
            }
            
        }

        else{
            return $req->input();
        }
        

    }

    public function LoginMenu(){
        return view ('login');
    }

    public function TeacherLoginMenu(){
        return view ('teacher_login');
    }
}