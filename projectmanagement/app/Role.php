<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name'
    ];


    // a role has many users
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
