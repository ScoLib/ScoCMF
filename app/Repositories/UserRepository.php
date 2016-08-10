<?php
namespace Sco\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;
use Sco\Models\User;
use Sco\Repositories\Criteria\UserCriteria;

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

}