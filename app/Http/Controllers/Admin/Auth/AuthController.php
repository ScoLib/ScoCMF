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

}