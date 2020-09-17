<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class AdminMiddleware
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
        if (Auth::check()) {
            $user = Auth::User();
            if ($user->role != 'Admin') {
                Session::flash('error_msg','Access Denied!.....Admins Only!');
                return redirect('/home');
            }
        } else{
            return redirect('/login');
        }
    
        return $next($request);
    }
}
