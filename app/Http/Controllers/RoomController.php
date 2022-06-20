<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;
use App\Models\Student;
use App\Models\RoomCourse;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Join;
use App\Events\NotificationSender;
use App\Events\message;

class RoomController extends Controller
{
    //lecturer room form to create
    function index($id){
        $lecturer=Lecturer::find($id);
        return view('lecturer.create',compact('lecturer'));
    }
//////////////////////////////
/// creating new room by lrcturer
    function create($id,Request $request){
        $randomSource=['../images/cs.png','../images/ai.jpg','../images/web.png'];
        $this->validate($request,[
            'subject'=>'required',
            'name'=>'required',
        ]);
        $lecturer=Lecturer::find($id);
        RoomCourse::create([
            'name'=>$request->name,
            'code'=>substr(md5(time()), 0, 10),
            'lecturer_id'=>$lecturer->id,
            'student_id'=>null,
            'subject'=>$request->subject,
            'icon'=>$randomSource[array_rand($randomSource)]
            
        ]);
        return redirect()->route('lecturerroom');
    }
    ////////////////////
    // join to new room by student//
    function joinForm($id){
        $student=Student::find($id);
        return view('student.join',compact('student'));

    }
   
    
}
