<?php

namespace App\Http\Middleware;

use Closure;

class CheckSession
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
        if ( !session()->get('user') ){
           return redirect('/');
        }
        //Getting user information from session class
        $UserInfomation = session()->get('user');
        $UserInfomation = $UserInfomation["User"][0];
        if (!$UserInfomation->Profile_Status){
            //return redirect('/user/profile');
        }
        return $next($request);
    }
}
