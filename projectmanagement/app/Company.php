<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'description',
        'user_id'
    ];

    // a company belongs to a user
    public function user()
    {
        $this->belongsTo('App\Model\User');
    }
}
