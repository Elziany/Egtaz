<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $table="exam";
    protected $fillable=[
       'exam_name', 'lecturer_id','student_id','question_number','student_degree','exam_name','start_date','end_date','image','room_code','total_degree'
    ];
    function Lecturer(){
        return $this->belongsTo(Lecturer::class,'lecturer_id');
    }
    function room(){
        return $this->belongsTo(RoomCourse::class,'room_code','code');
    }
    function question(){
       return $this->hasMany(Question::class,'exam_id');
    }
    function studentResults(){
        return $this->hasOne(RoomCourse::class,'exam_id');
    }
   
}
