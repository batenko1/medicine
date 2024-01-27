<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function __invoke() {

        $articles = Article::query()->orderBy('created_at', 'desc')->paginate(24);

        return view('news', compact('articles'));
    }

    public function oneNews($id, $slug) {

        $article = Article::query()->whereId($id)->whereSlug($slug)->firstOrFail();

        return view('one-news', compact('article'));

    }
}
