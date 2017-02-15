<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPhoneController extends Controller
{
    function index(){
        return view('administer.phone.index');
    }

    function readqr(){
        return view('administer.phone.readqr');
    }

    function createqr(){
        return view('administer.phone.createqr');
    }
}
