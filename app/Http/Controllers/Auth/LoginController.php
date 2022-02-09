<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use \Illuminate\Http\Request;
use Auth;


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
   

    use AuthenticatesUsers {
        logout as performLogout;
    }




    // use AuthenticatesUsers;
   
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo(){
        switch(Auth::user()->role){
            case 1:
                $this->redirectTo='/admin';
                return $this->redirectTo;
            break;

            case 2:
                $this->redirectTo='/manager';
                return $this->redirectTo;
            break;

            case 3:
                $this->redirectTo='/home';
                return $this->redirectTo;
            break;

            default:
                $this->redirectTo='/login';
                return $this->redirectTo;
            break;

        }
    }

   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function credentials(Request $request){
        $request['is_activated'] = 1;
        return $request->only('email', 'password', 'is_activated');
    }
    // redirecting to login page after logout
    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect('/login');
    }
}
