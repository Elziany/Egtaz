<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\RoomCourse;

class Student extends Model
{
    use HasFactory, Notifiable;
    protected $table='student';
    protected $fillable=['name','email','password','acadmicyear'];


    function profile(){
        return $this->hasOne(profile::class);
    }
    function studentRoom(){
        return $this->hasMany(studentRoom::class,'student_id')->orderBy('created_at','desc');
    }
    public static function room($room_id){
        $room=RoomCourse::find($room_id);
        return $room;
    }
    function studentResults(){
        return $this->hasMany(studentResults::class,'student_id')->orderBy('created_at','desc');
    }
}
