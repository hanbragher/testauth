<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    //
    public function __construct(){

        $this->middleware('auth');
    }

    public function show(Request $request){
        $this->authORno();

        $user = Auth::user()->id;
        //$user = Auth::id();

        //$user = $request->user()->name;
        dump($user);
        //return view('home');
    }

    public function authORno(){
        if (Auth::check()){
            echo 'yes';
        }else{
            echo 'no';
        }
    }
}
