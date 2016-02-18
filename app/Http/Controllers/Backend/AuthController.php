<?php


namespace Sco\Http\Controllers\Backend;

use Auth;
use Illuminate\Http\Request;
use Sco\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLogin()
    {
        return $this->render('backend::auth.login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::guard('admin')->attempt($request->only(['username', 'password']))) {
            return redirect()->action('Backend\BackendController@welcome');
        }

    }

    public function getLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('backend.login');
    }


}