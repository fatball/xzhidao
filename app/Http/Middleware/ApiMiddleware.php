<?php

namespace App\Http\Middleware;

use Closure;

class ApiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @link http://help.baidu.com/question?prod_en=zhidao&class=611&id=1001209
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->input('key') != \Config::get('api.key') || $request->input('token') != \Config::get('api.token')) {
            return response('Unauthorized.', 401);
        }

        return $next($request);
    }
}
