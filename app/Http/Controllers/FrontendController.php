<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        return view('contact');
    }


    public function Showtracking(){

        return view('tracking_page');
    }

    public function Aboutus(){

        return view('about');
    }

    public function services(){
        
        return view('services');
    }
}
