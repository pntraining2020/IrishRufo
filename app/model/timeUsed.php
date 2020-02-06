<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class timeUsed extends Model
{
    //
    protected $fillable = ['employee','clockInValue','startBreak','endBreak','clockOut','totalTimeWorked','Hoursleftbeforetimeout','totalbreaksused','clockInBoolean','endBreakBoolean','startBreakBoolean'];

    protected $table = 'timeUsed';
}
