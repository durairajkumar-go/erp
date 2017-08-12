<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = "en";
        $default_date_format = "d/m/Y";
        Session::put('default_date_format',$default_date_format);
        
        $default_currency = "$";
        Session::put('default_currency',$default_currency);

        /*if(Session::has('default_date_format')){
            $default_date_format = Session::get('default_date_format');
        }else{
            Session::put('default_date_format',$default_date_format);
        }*/

        if(Session::has('locale')){
            $locale = Session::get('locale');
        }else{
            $locale = Config::get('app.locale');
            Session::put('locale',$locale);
        }    

        \App::setlocale($locale);

        return $next($request);
    }
}
