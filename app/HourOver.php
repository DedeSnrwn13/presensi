<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HourOver extends Model
{
    protected $table = 'hour_overs';
    protected $fillable = ['hours_start', 'hours_over', 'updated_by'];
}
