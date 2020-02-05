<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    /**
     * The jobs for the user
     */
     public function jobs()
     {
       return $this->hasMany('App\Job', 'client_id');
     }
    /**
     * The roles that belongs to the user
     */
     public function roles()
     {
       return $this->belongsToMany(Role::class, 'role_user');
     }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * Get the Phone records associated with the user
     */
     public function phone()
     {
       return $this->hasOne('App\phone');
     }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
