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

            if($role != 'Administrator')
            {
                $request->session()->flash('message','Access Denied');
                return redirect()->back();
            }
            else
            {
                return $next($request);
            }
        }
        else
        {
            return 'Not logged in';
        }
        
        
    }
}
