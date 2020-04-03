<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    //
    protected $fillable = [
        'majors_id',
        'name',
        'roll_id',
        'national_id',
        'year_id',
        'contact_info',
        'father_name',
        
    ];


    public function majors()
    {
        return $this->belongsTo('App\Major');
    }



}
