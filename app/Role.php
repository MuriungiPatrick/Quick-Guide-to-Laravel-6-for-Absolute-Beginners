<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Get the users that belong to the role
     */
     public function users()
     {
       return $this->belongsToMany(User::class, 'role_user');
     }
}
