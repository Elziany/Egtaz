<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Lecturer as Authenticatable;

class Lecturer extends Model
{
    use HasFactory, Notifiable;
    protected $table='lecturer';
    protected $fillable=['name','email','password','specialization'];


    function profile(){
        return $this->hasOne(profile::class);
    }
    function room(){
        return $this->hasMany(RoomCourse::class)->orderBy('created_at','desc');
    }
    function exam(){
        return $this->hasMany(Exam::class,'lecturer_id')->orderBy('created_at','desc');
    }
    function results(){
        return $this->hasMany(studentResults::class,'lecturer_id')->orderBy('student_id','asc');
    }
}
