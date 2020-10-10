<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class Vendor
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
        

     

        return $next($request);
 


        // if( Auth::check() )
        // {
        //     // if user admin take him to his dashboard
        //     if ( Auth::user()->isVendor() ) {
        //          return redirect(route('vendor'));
        //     }

        //     // allow user to proceed with request
        //     else if ( Auth::user()->isUser() ) {
        //          return $next($request);
        //     }
        // }

        // abort(404);  
    }
}
