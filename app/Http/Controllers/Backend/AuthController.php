<?php


namespace Sco\Http\Controllers\Backend;

use Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Sco\Http\Controllers\Controller;

class AuthController extends Controller
{
    use ThrottlesLogins;

    //private $maxLoginAttempts = 2;

    //private $lockoutTime = 10;

    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'getLogout']);
    }

    public function getLogin()
    {
        return $this->render('backend::auth.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ], [
            'required' => '请输入您的用户名和密码',
        ]);

        if ($lockedOut = $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if (Auth::guard('admin')->attempt($request->only(['username', 'password']))) {
            return redirect()->route('backend.index');
        }
        return redirect()->back()
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors('您的用户名或密码错误');

    }

    public function getLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('backend.login');
    }

    protected function loginUsername()
    {
        return 'username';
    }


}