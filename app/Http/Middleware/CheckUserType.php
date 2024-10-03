<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserType
{
    public function handle($request, Closure $next, $type)
    {
        $userType = $request->session()->get('user_type');

        if (!Auth::check() || $userType !== $type) {
            return redirect('/');
        }

        return $next($request);
    }
}
