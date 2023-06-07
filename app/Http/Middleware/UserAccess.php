<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userType)
    {
        if(Auth::check()) {
            if (auth()->user()->role != $userType) {
                if ($userType === 'admin') {
                    return redirect('admin/login');
                }
        
                if ($userType === 'user') {
                    return redirect('login');
                }
            }
            return $next($request);
        }

        if ($userType === 'admin') {
            return redirect('admin/login');
        }

        if ($userType === 'user') {
            return redirect('login');
        }

        return abort(401);
    }
}
