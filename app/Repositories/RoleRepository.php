<?php

namespace Sco\Repositories;


use Prettus\Repository\Eloquent\BaseRepository;
use Sco\Models\Role;

class RoleRepository extends BaseRepository
{

    public function model()
    {
        return Role::class;
    }

}