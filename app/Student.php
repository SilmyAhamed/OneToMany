<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    public $primarykey = 'index';
    public $timestamps = true;

    public function subjects()
    {
        return $this->hasMany('App\Subject');
    }
}
