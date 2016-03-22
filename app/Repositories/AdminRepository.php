<?php

namespace Sco\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Sco\Models\Admin;

/**
 * 管理员
 *
 * @package namespace Sco\Repositories;
 */
class AdminRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Admin::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        //$this->pushCriteria(app(RequestCriteria::class));
    }
}
