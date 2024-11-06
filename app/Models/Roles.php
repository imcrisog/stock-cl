<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'role_id',
        'user_id'
    ];

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
