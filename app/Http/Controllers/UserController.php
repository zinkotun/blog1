<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function useradd(){
        return view('/useradd');
    }
    function userdelete(){
        return view('userdel');
    }
    function userinsert(){
        return "useradd is here!";
    }
}
