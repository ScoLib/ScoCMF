<?php

namespace Sco\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    public $timestamps = false;

    public function group()
    {
        return $this->belongsTo('Sco\Models\AdminGroup', 'group_id', 'group_id');
    }
}
