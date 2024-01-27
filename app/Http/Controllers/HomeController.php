<?php

namespace App\Http\Controllers;

use App\Article;
use App\Product;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {

        $products = Product::query()->where('is_home', 1)->take(6)->get();

        $articles = Article::query()->orderBy('created_at', 'desc')->take(3)->get();

        return view('home', compact('products', 'articles'));
    }
}
