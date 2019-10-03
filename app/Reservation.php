<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Timeslot;

class Reservation extends Model
{
    protected $guarded = ['id'];

    public function timeslot()
    {
    	$this->hasOne('App/Timeslot');
    }

}