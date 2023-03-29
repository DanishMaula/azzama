<?php

namespace App\Http\Controllers;

use App\ArticleModel;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article()
    {
        return view('article', [
            'article' => ArticleModel::all()
        ]);
    }
}
