<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('User.index');
    }
    public function adminHome()
    {
        return view('adminHome');
    }
    public function doctorHome(){
        return view('doctorHome');
    }
    public function addaddress(){

    }
}
