<?php

namespace App\Http\Middleware;

use Closure;

class DealerMiddleware
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

        if(auth()->user()->usertype_id == 2){
            if (url('/profile') != url()->current() && \App\User::getdetailsdealer()->first()->dealer_flag == 0){
                return redirect('/profile');
            }
            return $next($request);
        }else{

            abort(404);
        }




    }
}
