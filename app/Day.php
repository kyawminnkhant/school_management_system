<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    //
    public function timetable()
    {
        return $this->belongsTo('App\TimeTable');
    }
}
