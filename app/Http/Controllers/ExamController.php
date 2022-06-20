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
use App\Models\Exam;
use App\Models\studentRoom;


class ExamController extends Controller
{
    function createExam(Request $request,$id,$code){
        
        $lecturer=Lecturer::find($id);
        $room=$lecturer->room()->where('code',$code)->first();
        $randomSource=['../images/exam1.JPG','../images/exam2.JPG','../images/exam3.JPg'];
        $this->validate($request,[
            'question_number'=>'required',
            'total_degree'=>'required',
            'start_date'=>'required',
            
            'end_date'=>'required',
            
            'exam_name'=>'required',
            


        ]);
        $exam=Exam::create([
            'question_number'=>$request->question_number,
            'total_degree'=>$request->total_degree,
            'start_date'=>$request->start_date,
          
            'end_date'=>$request->end_date,
          
            'exam_name'=>$request->exam_name,
            'student_id'=>null,
            'lecturer_id'=>$id,
            'room_code'=>$code,
            'student_degree'=>null,
            'image'=>$randomSource[array_rand($randomSource)],

        ]);
        
        $exam_id=$exam->id;
        
    return redirect()->route('questionForm',compact(['id','exam_id','code']));

  
   }



    
    
    function examFinish($id,$exam_id,$code){

        $lecturer=Lecturer::find($id);
        $room=$lecturer->room()->where('code',$code)->first();
        $studentRoom=$room->studentRoom()->get();
        $exam=$room->exams()->where('id',$exam_id)->first();
      
        foreach($studentRoom as $studentR){
        $student=$studentR->student()->where('id',$studentR->student_id)->first();
       Notification::send($student,new join($lecturer,$room,'EXAM'));
       event(new studentMessage($lecturer->name.' created new exam in room '.$room->name.'at date '.$exam->created_at,$student->id));
       
        }
        return redirect()->route('examRoom',compact(['id','code']));
    }
}
