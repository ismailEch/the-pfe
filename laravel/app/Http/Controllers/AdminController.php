<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function home(){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            if($usertype == "student"){
                return view('student.home');
            }else if($usertype == "landlord"){
                return view('landlord.home');
            }
        }else{
            return redirect()->back();
        }
        
    }

    public function index(){
        return view('student.home');
    }
}
