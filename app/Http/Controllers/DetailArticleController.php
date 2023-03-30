<?php

namespace App\Http\Controllers;

use App\ArticleModel;
use Illuminate\Http\Request;

class DetailArticleController extends Controller
{
    public function detail($id)
    {
        $detail = ArticleModel::find($id);
        return view(
            'detail-article',
            compact([
                'detail'
            ])
        );
    }
}
