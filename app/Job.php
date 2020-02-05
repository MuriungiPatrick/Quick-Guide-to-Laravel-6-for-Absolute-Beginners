<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  /**
   * Attributes that are mass assignable
   */
   protected $guarded = [];
    /**
     * Get the client that owns the job
     */
     public function client()
     {
       return $this->belongsTo(User::class, 'client_id');
     }
     /**
      * Get the slug column
      */
     public function getRouteKeyName()
     {
       return 'slug';
     }
}
