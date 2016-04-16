<?php


namespace Sco\Http\Controllers\Backend;

use Auth;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Sco\Http\Controllers\Controller;

class AuthController extends Controller
{
    use ThrottlesLogins, ValidatesRequests;

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
        ]);

        // 登录失败次数限制
        if ($lockedOut = $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if (Auth::guard('admin')->attempt($request->only(['username', 'password']), true)) {
            $this->updateLogin();

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

    private function updateLogin()
    {
        $user = Auth::guard('admin')->user();

        $user->last_login_ip   = request()->ip();
        $user->last_login_time = Carbon::now();
        $user->save();
    }


}