<?php


namespace Sco\Http\Controllers\Admin\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Sco\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers, ValidatesRequests;

    //private $maxLoginAttempts = 2;

    //private $lockoutTime = 10;

    protected $redirectTo = '/admin';

    protected $redirectAfterLogout = 'admin/login';


    public function showLoginForm()
    {
        return view('admin::auth.login');
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }
}