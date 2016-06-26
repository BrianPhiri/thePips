<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class IfNotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check())
        {
            $role = Auth::user()->role;

            // If not admin return back to the current page
            if($role != 'Administrator')
            {
                return redirect('hacker');
            }
            // If admin accept the request and redirect to the intended page
            else
            {
                return $next($request);
            }
        }
        // You are not logged in therefore you can't view page.
        else
        {
            return redirect('notAuth');
        }


    }
}
