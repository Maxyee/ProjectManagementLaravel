<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'project_id',
        'user_id',
        'days',
        'hours',
        'company_id'
    ];

    // task belongs to user
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // task belongs to project
    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    // task belongs to company
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    //a task belongs to many user
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
