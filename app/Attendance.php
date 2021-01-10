<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['teacher_id', 'date', 'time_in', 'time_out', 'note'];

    public function teacher() {
        return $this->belongsTo('App\Teacher');
    }
}
