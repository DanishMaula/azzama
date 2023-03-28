<?php

namespace App\Http\Controllers;

use App\ArticleModel;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article', [
            'article' => ArticleModel::all()
        ]);
    }
}
