<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function CheckInputField(Request $req){
        //Validating the form if there's an Input Field that has no value
        $req->validate([
            'username' => 'required|max:255|unique:posts',
            'password' => 'required|max:255',
        ]);

        return $req->input();

    }
}