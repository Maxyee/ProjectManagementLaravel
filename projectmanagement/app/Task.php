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
        return $this->belongsTo('App\Models\User');
    }

    // task belongs to project
    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }

    // task belongs to company
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
