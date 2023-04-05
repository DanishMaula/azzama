<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleModel;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        
        // if (Auth::user()->role == 'admin') { // Role admin
        //     return view('tampilan.admin');
        // } elseif (Auth::user()->role == 'customer') { // Role customer
        //     return view('home');
        // }
            
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }
}