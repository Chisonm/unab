<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('role','Customer')->orderBy('id','desc')->get();
        return view('admin.dashboard', compact('users'));
    }
}
