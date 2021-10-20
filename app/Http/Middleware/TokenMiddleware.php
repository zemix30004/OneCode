<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $token)
    {
        // info('log', ['foo' => 'bar']);  //вывод данных по факту//
        // dd('log', ['foo' => 'bar']);  //не останавливается обработка кода//
        // dump('log', ['foo' => 'bar']);//не останавливается обработка кода//
        // abort(404);                  //вывод ошибки 404 not found//
        // abort(500);                  //вывод ошибки сервера 404 server error//
        // abort_if(true, 500);           //вывод ошибку 500//
        // abort_if(false, 500);          //выведет ошибку 403 //
        // abort_if(5 > 1, 500);          //выведет ошибку 500 //
        // abort_if(5 < 1, 500);          //выведет ошибку 403 //

        if ($request->input('token') === $token) {
            return $next($request);
        }
        abort(403);    // вывод ошибки 404 forbidden//
    }
}
