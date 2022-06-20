<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table="question";
    protected $fillable=[
        'exam_id','room_code','lecturer_id','type','question_body','option1','option2','option3','correct_answer1','correct_answer2','correct_answer3','question_degree','name'
    ];
    function exam(){
     return   $this->belongsTo(Exam::class,'exam_id');
    }
}
