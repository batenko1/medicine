<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function __invoke($category)
    {

        $category = Category::query()->whereSlug($category)->firstOrFail();

        $breadcrumbs = [
            '' => $category->getTranslatedAttribute('name')
        ];

        return view('category', compact('category', 'breadcrumbs'));

    }

    public function subcategory($category, $subcategory) {

        $category = Category::query()
            ->whereSlug($category)
            ->firstOrFail();

        $subcategory = Category::query()
            ->where('parent_id', $category->id)
            ->whereSlug($subcategory)
            ->firstOrFail();

        $products = Product::query()
            ->where('category_id', $subcategory->id)
            ->paginate(24);

        $breadcrumbs = [
            route('category', $category->slug) => $category->getTranslatedAttribute('name'),
            '' => $subcategory->getTranslatedAttribute('name')
        ];


        return view('subcategory', compact('breadcrumbs', 'subcategory', 'products'));
    }
}
