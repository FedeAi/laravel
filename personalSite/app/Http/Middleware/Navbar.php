<?php

namespace App\Http\Middleware;

use Closure;
use App;
class Navbar
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
        $nav_services = App\Tag::latest()->get();

        \View::share('nav_services', $nav_services);

        return $next($request);
    }
}
