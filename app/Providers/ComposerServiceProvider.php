<?php

namespace App\Providers;

use App\Category;
use App\Page;
use App\Partner;
use Illuminate\Support\ServiceProvider;
use Request;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('composerCategories', $this->categories());
        view()->share('seo', $this->getSeoPage());
        view()->share('partners', $this->getPartners());
    }

    public function categories() {
        return Category::query()
            ->with('child')
            ->whereNull('parent_id')
            ->get();
    }

    public function getPartners() {
        return Partner::query()->get();
    }

    public function getSeoPage() {

        $data = false;


        $languages = ['ru', 'en'];

        $path = '';
        if(Request::path() != '/') {
            $path = '/'. Request::path();
        }


        $path = preg_replace('/\/page\/[0-9]+/', '', $path);
        $arr = [];

        foreach ($languages as $language) {
            array_push($arr, '/'.$language);
            array_push($arr, '/'.$language. '/');
            array_push($arr, $language. '/');
        }


        $path = str_replace($arr, '', $path);


        if(!$path || $path == 'ru') {
            $path = '/';
        }


        $page = Page::where('slug', $path)->first();


        if($page) {
            return $page;
        }


        return $data;

    }
}
