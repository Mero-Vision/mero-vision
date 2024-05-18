<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function webIndex(){
        return view('packages.web_package');
    }

    public function mobileIndex(){
        return view('packages.mobile_package');
    }
}
