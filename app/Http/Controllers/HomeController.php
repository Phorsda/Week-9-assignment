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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function property()
    {
        return view('property');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function propertysingle()
    {
        return view('propertysingle');
    }

    public function blogsingle()
    {
        return view('blogsingle');
    }

    public function agent()
    {
        return view('agent');
    }

    public function agentsingle()
    {
        return view('agentsingle');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}
