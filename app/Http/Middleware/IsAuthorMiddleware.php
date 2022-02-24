<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAuthorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $userRole = auth()->user()->role;
        if($userRole !== 'admin' && $userRole !== 'author'){
            abort(403 , '!!.شما مجاز به ورود در این صفحه نیستید ');
        }
        return $next($request);
    }
}
