<?php

namespace Sco\Repositories;


use Bosnadev\Repositories\Eloquent\Repository;
use Bosnadev\Repositories\Traits\CacheableRepository;
use Sco\Models\Role;

class RoleRepository extends Repository
{

    use CacheableRepository;

    private $allRoles = null;

    public function model()
    {
        return Role::class;
    }


    public function getAllRoles()
    {
        if ($this->allRoles) {
            return $this->allRoles;
        }

        $this->allRoles = $this->remember('all', function () {
            return $this->model->get();
        });

        return $this->allRoles;
    }

}