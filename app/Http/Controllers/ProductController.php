<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke($id, $slug)
    {

        $product = Product::query()->whereId($id)->whereSlug($slug)->firstOrFail();


        $breadcrumbs = [
            route('category', $product->categoryId->parentId->slug) => $product->categoryId->parentId->getTranslatedAttribute('name'),
            route('subcategory', ['category' => $product->categoryId->slug, 'subcategory' => $product->categoryId->slug]) => $product->categoryId->getTranslatedAttribute('name'),
            '' => $product->getTranslatedAttribute('title')
        ];

        return view('product', compact('product', 'breadcrumbs'));
    }
}
