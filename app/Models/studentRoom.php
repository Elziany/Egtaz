<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentRoom extends Model
{
    use HasFactory;
    protected $table="studentroom";
    protected $fillable=['student_id','room_id'];
    function student(){
        return $this->belongsTo(Student::class,'student_id');
    }
    function room(){
        return $this->belongsTo(RoomCourse::class,'room_id');
    }
}
