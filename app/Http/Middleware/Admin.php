<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
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
        // Ellenőrizzük, hogy a felhasználó be van-e jelentkezve és admin-e
        if ($request->user() && $request->user()->role === 'admin') {
            return $next($request);
        }

        // Ha a felhasználó nincs bejelentkezve, vagy nem admin, akkor 403-as hibát dobunk
        abort(403, 'You are not an administrator');
    }
}