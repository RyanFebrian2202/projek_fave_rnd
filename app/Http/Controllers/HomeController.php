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
        return view('home.home');
    }

    public function getRegisterPage(){
        return view('authentication.register');
    }

    public function getLoginPage(){
        return view('authentication.login');
    }

    public function getCreatePage(){
        return view('');
    }
}
