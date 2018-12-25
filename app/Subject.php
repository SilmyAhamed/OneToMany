<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    public $primarykey = 'id';
    public $timestamps = true;

    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
