<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCourse extends Model
{
    use HasFactory;
    protected $table='room';
    protected $fillable=['student_id','lecturer_id','code','name','subject','icon'];
    function lecturer(){
    return $this->belongsTo(Lecturer::class,'lecturer_id');
    }
    function studentRoom(){
        return $this->hasMany(studentRoom::class,'room_id');
        }
        function exams(){
            return $this->hasMany(Exam::class,'room_code','code')->orderBy('created_at','desc');
        }
      
    }
