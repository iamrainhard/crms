<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();

        if ($user->role == "admin") {
            return view('layouts.admin');
        }else if($user->role == "hq"){
            return view('layouts.hq');
        }else if ($user->role == "pastor") {
            return view('layouts.pastor');
        }else if ($user->role == "elder") {
            return view('layouts.elder');
        }else {
            return view('layouts.user');
        }


    }
}
