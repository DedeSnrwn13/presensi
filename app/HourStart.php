<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HourStart extends Model
{
    protected $table = 'hour_starts';
    protected $fillable = ['hours_start', 'hours_over', 'updated_by'];
}
