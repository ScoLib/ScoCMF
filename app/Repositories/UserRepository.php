<?php
namespace Sco\Repositories;

use Bosnadev\Repositories\Criteria\RequestCriteria;
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
     * 可搜索的字段
     *
     * @var array
     */
    protected $fieldSearchable = [
        'uid', 'username' => 'like', 'email'
    ];

    /**
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}