<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminRoleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->hasRole('admin')
        ) {
            return $next($request);
        }

        return redirect('dashboard')->withErrors(['role' => 'You have not admin access'])->withInput();
    }
}
