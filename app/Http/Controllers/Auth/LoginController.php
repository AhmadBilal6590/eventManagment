<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

     use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     * 
     *
     */

    //  public function red()
    //  {
    //      dd('aa');
    //  }


       
    // protected $redirectTo = RouteServiceProvider::HOME;

    // protected $redirectTo;

    public function redirectTo()
    {
        switch(\Auth::user()->user_role){
            case 'admin':
            $this->redirectTo = '/admin';
            return $this->redirectTo;
                break;
            case 'user':
                    $this->redirectTo = '/customer';
                return $this->redirectTo;
                break;
            case 'vendor':
                $this->redirectTo = '/vendor';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
         
        // return $next($request);
    } 



    // protected function authenticated(Request $request, $user)
    // {
    //     // to admin dashboard
    //     if($user->isVendor()) {
    //         return redirect(route('vendor'));
    //     }

    //     // to user dashboard
    //     else if($user->isUser()) {
    //         return redirect(route('customer'));
    //     }

    //     abort(404);
    // }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware('guest')->except('logout');
    }
}



   

    