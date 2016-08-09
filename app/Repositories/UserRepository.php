<?php
namespace Sco\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;
use Sco\Models\User;

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


}