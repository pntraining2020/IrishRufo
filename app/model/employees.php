<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    //
    protected $fillable = ['firstname', 'middlename', 'lastname'];

    protected $table = 'employees';
}
