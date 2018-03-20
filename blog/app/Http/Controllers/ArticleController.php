<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function showArticles() {
        $article1 = "Article 1 from Route";
        $article2 = "Article 2 from Route";
        $articles = ["Article 1", "Article 2", "Article 3"];
        return view('articles/articles_list', compact('article1', 'article2', 'articles'));
    }
}
