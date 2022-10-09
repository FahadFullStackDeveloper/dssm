<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
                        
            // if ($guard == "admin" && Auth::guard($guard)->check()) {
            //     return redirect('/admin/dashboard');
            // } else if ($guard == "teacher" && Auth::guard($guard)->check()) {
            //     return redirect('/teacher/dashboard');
            // }
            
            // return redirect(RouteServiceProvider::HOME);

            if ($guard == "admin" && Auth::guard($guard)->check()) {
                return redirect('/admin/dashboard');
            }
            if ($guard == "teacher" && Auth::guard($guard)->check()) {
                return redirect('/teacher/dashboard');
            }

            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
            
        }

        // switch ($guard) {
        //   case 'moderator':
        //     if (Auth::guard($guard)->check()) {
        //       return redirect()->route('moderator.dashboard');
        //     }
        //   break;

        //   case 'client':
        //       if (Auth::guard($guard)->check()) {
        //         return redirect()->route('client.dashboard');
        //       }
        //   break;
        //   default:
        //     if (Auth::guard($guard)->check()) {
        //         return redirect('/home');
        //     }
        //     break;
        // }


        return $next($request);

        return $next($request);
    }
}
