<?php


namespace Sco\Http\Controllers\Admin\Auth;

use Auth;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Sco\Http\Controllers\Controller;

class AuthController extends Controller
{
    use ThrottlesLogins, AuthenticatesUsers, ValidatesRequests;

    //private $maxLoginAttempts = 2;

    //private $lockoutTime = 10;

    protected $guard = 'admin';

    protected $loginView = 'admin::auth.login';

    protected $redirectPath = 'admin';

    protected $redirectAfterLogout = 'admin/login';

    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }

    /*public function getLogin()
    {
        return $this->render('admin::auth.login');
    }*/

    public function postLogin1(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        // 登录失败次数限制
        if ($lockedOut = $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if (Auth::guard('admin')->attempt($request->only(['email', 'password']), true)) {
            $this->updateLogin();

            return redirect()->route('admin.index');
        }
        return redirect()->back()
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors('您的用户名或密码错误');

    }

    public function getLogout1()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    protected function loginUsername1()
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