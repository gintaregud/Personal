<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $fillable = ['name',  'email', 'password', 'status_id'];

    public function status()
    {
        return $this->belongsTo('App\Status');
    }
}
