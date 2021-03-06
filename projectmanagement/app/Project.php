<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'company_id',
        'user_id',
        'days',
    ];

    //protected $table = 'Project';
    //a project belongs to a user
//    public function user()
//    {
//        return $this->belongsTo('App\Models\User');
//    }

    // a project belongs to a company
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    // project belongs to many users
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
