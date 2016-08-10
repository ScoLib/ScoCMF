<?php
namespace Sco\Http\Controllers\Admin\User;

use Sco\Http\Controllers\Admin\BaseController;
use Sco\Repositories\UserRepository;

class IndexController extends BaseController
{
    public function getIndex()
    {
        $this->users = app(UserRepository::class)->paginate(15);
        return $this->render('user.index.index');
    }
}