<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
