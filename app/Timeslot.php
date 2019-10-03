<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeslot extends Model
{
    protected $guarded = ['id'];

    public function timeslot()
    {
    	$this->belongsTo('App/Reservation');
    }

}