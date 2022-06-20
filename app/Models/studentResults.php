<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentResults extends Model
{
    use HasFactory;
   protected $table="studentresults";
 protected  $fillable=['id','student_id','exam_id','lecturer_id','total_degree','exam_degree'];
   function student(){
       return $this->belongsTo(Student::class,'student_id');
   }
    function exam(){
    return $this->belongsTo(Exam::class,'exam_id');
}
function lecturer(){
    return $this->belongsTo(Lecturer::class,'lecturer_id');
}
}
