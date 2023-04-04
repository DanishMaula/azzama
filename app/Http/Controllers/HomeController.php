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

        $articles = ArticleModel::orderBy('id', 'desc')->limit(3)->get();
        return view('home' , compact('articles'));
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
}