<?php

namespace App\Http\Controllers;

use App\Country;
use App\Parcel;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 

        $user = Auth::User();
        if($user->role == "Admin"){
            return redirect('admin/dashboard');
        }
        return view('home');
    
        
        // $countries = Country::get(, 'countries');
        // return view('home');
    }
    
    public function logout(){
        Session::flush();
        return redirect()->route('login');
    }
}
