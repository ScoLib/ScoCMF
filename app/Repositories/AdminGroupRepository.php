<?php


namespace Sco\Repositories;


use Prettus\Repository\Eloquent\BaseRepository;
use Sco\Models\AdminGroup;

class AdminGroupRepository extends BaseRepository
{

    public function model()
    {
        return AdminGroup::class;
    }
}