<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SingleSessionMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $currentSessionId = session()->getId();

            // If the session IDs don't match, log out the user
            if ($user->session_id !== $currentSessionId) {
                Auth::logout();

                return redirect('/login')->withErrors([
                    'message' => 'Your session has expired because you logged in from another device.',
                ]);
            }
        }

        return $next($request);
    }
}
