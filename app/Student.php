<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    public $primarykey = 'id';
    public $timestamps = true;

    public function subject()
    {
        return $this->hasMany('App\Subject');
    }
}
