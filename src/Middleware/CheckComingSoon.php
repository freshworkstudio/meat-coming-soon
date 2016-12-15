<?php

namespace Meat\Middleware;

use Closure;

class CheckComingSoon
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
        if(env('APP_COMINGSOON')){
            return redirect(url(config('coming-soon.redirect_url')));
        }
        return $next($request);
    }
}