<?php
namespace Sco\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;
use Illuminate\Http\Request;
use Sco\Models\User;
use Sco\Repositories\Criteria\UserCriteria;
use DB;

/**
 * Class UserRepository
 *
 * @package Sco\Repositories
 */
class UserRepository extends Repository
{

    /**
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    public function boot()
    {
        $this->pushCriteria(app(UserCriteria::class));
    }

    public function createUser(Request $request)
    {
        DB::transaction(function () use($request) {
            $user = $this->create($request->except('role'));
            $user->roles()->attach($request->input('role'));
        });
        return true;
    }

}