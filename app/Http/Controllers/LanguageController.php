<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function setlocale(Request $request, $lang) {
        $referer = \Redirect::back()->getTargetUrl();

        $parse_url = parse_url($referer, PHP_URL_PATH);


        $segments = explode('/', $parse_url);

        if(!isset($segments[1])) {
            $segments[1] = '';
        }


        if (in_array($segments[1], config('voyager.multilingual.locales'))) {
            unset($segments[1]);
        }


        if (true){
            array_splice($segments, 1, 0, $lang);
        }


        $requestRoot = \Request::root();
        if(strpos('setlocale', $requestRoot) !== false) {
            $requestRoot = route('home');
        }


        $url = $requestRoot.implode("/", $segments);


        if(parse_url($referer, PHP_URL_QUERY)){
            $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
        }
        return redirect($url); //Перенаправляем назад на ту же страницу
    }
}
