<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeTable extends Model
{
    //
    protected $fillable = [
        'days_id',
        'majors_id',
        'subjects_id',
        'times_id',

    ];




    public function days()
    {
        return $this->belongsTo('App\Day');
    }

    public function majors()
    {
        return $this->belongsTo('App\Major');
    }

    public function subjects()
    {
        return $this->belongsTo('App\Subject');
    }

    public function times()
    {
        return $this->belongsTo('App\Time');
    }
}
