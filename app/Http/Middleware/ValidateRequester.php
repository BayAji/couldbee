<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateRequester
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
        if (!empty($request->header('token')) && $request->header('token') == 'QW5qYXlNYWJhckdhdXlzU2xqYXNuYWp5U2phc2pubzg0MzgxMjQyMTRp')
            return $next($request);

        return redirect('http://couldbee.urisuzy.com');
    }
}
