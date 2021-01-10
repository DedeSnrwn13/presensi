<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'user_id', 'avatar', 'nik', 'name', 'no_hp', 'major', 'subjects', 'username', 'gender',
    ];

    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function attendance() {
        return $this->hasMany('App\Attendance');
    }
}
