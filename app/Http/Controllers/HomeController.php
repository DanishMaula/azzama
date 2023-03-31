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

        $article = ArticleModel::all();
        return view('home' , compact('article'));
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