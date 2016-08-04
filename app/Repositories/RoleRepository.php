<?php

namespace Sco\Repositories;


use Bosnadev\Repositories\Eloquent\Repository;
use Sco\Models\Role;

class RoleRepository extends Repository
{

    public function model()
    {
        return Role::class;
    }

}