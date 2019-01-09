<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;

class Language
{
    public function __construct(Application $app, Request $request) {
        $this->app = $app;
        $this->request = $request;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(in_array($request->segment(2), config('app.available_locale')))
        {
            //dd('Request to change locale');
            app()->setLocale(session('locale', ($request->segment(2) ?? config('app.locale'))));
        }
        else
        {
            app()->setLocale((session('locale') ?? config('app.locale')));
        }

        return $next($request);
    }
}
