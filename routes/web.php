<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PriceListController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\LanguageSelectMiddleware;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/setlocale/{lang}', [
    'as' => 'setlocale',
    'uses' => 'LanguageController@setlocale'
]);

Route::group(['prefix' => LanguageSelectMiddleware::getLocale()], function () {

    Route::get('/', HomeController::class)->name('home');

    Route::get('about', AboutController::class)->name('about');

    Route::get('contacts', ContactsController::class)->name('contacts');

    Route::get('catalog', CatalogController::class)->name('catalog');

    Route::get('catalog/{category}', CategoryController::class)->name('category');

    Route::get('catalog/{category}/{subcategory}', [CategoryController::class, 'subcategory'])->name('subcategory');

    Route::get('products/{id}-{slug}', ProductController::class)->name('product');

    Route::get('news', NewsController::class)->name('news');
    Route::get('news/{id}-{slug}', [NewsController::class, 'oneNews'])->name('one-news');


    Route::post('save-application', ApplicationController::class)->name('save-application');

    Route::get('price-list', PriceListController::class)->name('price-list');

});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
