<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestsTimeTables extends Model
{
    //


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
