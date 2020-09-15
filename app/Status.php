<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $fillable = ['title', 'description', 'distance'];
    public function statuses()
    {
        return $this->hasMany('App\Status');
    }

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
