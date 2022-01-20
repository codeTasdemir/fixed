<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class AuthenticateUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('userSessions')){
            return redirect('/')->with('fail','Please Loggedin');
        }

        else{
             return $next($request);

        }
    }
}
