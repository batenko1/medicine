<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LanguageSelectMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  \Closure(Request): (Response|RedirectResponse)  $next
     * @return Response|RedirectResponse
     */
    public function handle($request, Closure $next)
    {

        $locale = self::getLocale();

        if($locale) {
            App::setLocale($locale);
        }

        else {
            App::setLocale(config('voyager.multilingual.default'));
        }

        return $next($request);
    }

    public static function getLocale()
    {
        $uri = request()->path();


        $segmentsURI = explode('/',$uri);


        if (!empty($segmentsURI[0]) && in_array($segmentsURI[0], config('voyager.multilingual.locales'))) {
            return $segmentsURI[0];
        }
        return null;
    }
}
