<?php
namespace Sco\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use Sco\Http\Controllers\Admin\BaseController;
use Sco\Repositories\UserRepository;

class IndexController extends BaseController
{
    public function getIndex(Request $request)
    {
        if ($request->has('username')) {

        }

        $this->users = app(UserRepository::class)->paginate(15);
        return $this->render('user.index.index');
    }
}