<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    public $primarykey = 'module';
    public $timestamps = true;

    public function students()
    {
        return $this->belongsTo('App\Student');
    }
}
