<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;
use App\Models\profile;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Join;
use App\Events\message;
use App\Events\studentMessage;
use App\Models\RoomCourse;
use App\Models\Question;
use App\Models\Exam;

class QuestionController extends Controller
{
    function createQuestion(Request $request,$id,$exam_id,$code){
        $exam=Exam::find($exam_id);
   
        $this->validate($request,[
            'type'=>'required',
            'question_body'=>'required',
            'correct_answer1'=>'required',
            'correct_answer2'=>'required',
            'correct_answer3'=>'required',


        ]);
        $correct_answers=array();
        if($request->type==='Essay'){
           
        
        $stop_words=['IS','ARE','AM','THE','A','AN','ABOUT','AT','TO','OR','WAS','WERE','DO','DOES','DID'];
        $answers=[$request->correct_answer1,$request->correct_answer2,$request->correct_answer3]; 

foreach($answers as $answer){
        $string=explode(" ",strtoupper($answer));
       
        $i=0;
foreach($string as $word){

        if(in_array($word,$stop_words)== 1){  
           
            unset($string[$i]); 
}
$i++;
}
array_push($correct_answers,implode(" ",$string));

        }
    }
     else{
         $correct_answers=[$request->correct_answer1,$request->correct_answer2,$request->correct_answer3];
     }
        
       $question=Question::create([
                'lecturer_id'=>$id,
                'room_code'=>$code,
                'type'=>$request->type,
                'question_body'=>$request->question_body,
                'option1'=>$request->option1,
                'option2'=>$request->option2,
                'option3'=>$request->option3,
                'correct_answer1'=>$correct_answers[0],
                'correct_answer2'=>$correct_answers[1],
                'correct_answer3'=>$correct_answers[2],
                'exam_id'=>$exam_id,
                'question_degree'=>$request->degree,
                'name'=>substr(md5(time()), 0, 10),
        ]);
        $number=Question::where('exam_id',$exam_id)->count();
        return redirect()->back()->with('msg','question number '.$number .' is create out of '.$exam->question_number);
    }
}

