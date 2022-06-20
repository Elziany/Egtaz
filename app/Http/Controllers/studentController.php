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
use App\Models\studentResults;
use Illuminate\Support\Carbon;
class studentController extends Controller

{
    //register page for student
    function studentregister(){
        return view('student.signup2');
    }
    //end of function

    //login page for student
    function studentLogin(){
        return view('student.login2');
    }
    //end of function
    //create new student account
    function studentStore(Request $request){
        $this->validate($request,[
            'name'=>"required",
            'email'=>"required|unique:lecturer|unique:student",
            'password'=>"required|min:8",
            'repassword'=>"required",
            'acadmicyear'=>"required"

        ]);
        $pass=$request->password;
        $repass=$request->repassword;
        if($pass===$repass){
            Student::create([
                    'name'=>$request->name,
                    'password'=>Hash::make($request->password),
                    'email'=>$request->email,
                    'acadmicyear'=>$request->acadmicyear
            ]);
            return redirect()->route('studentlogin');

        }
        else{
            return redirect()->back()->with('msg','password is not matched');
        }
    }
    //end of function
    //check for student loggining 
    function studentCheck(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);
        $student=Student::where('email',$request->email)->first();
        if($student !==null){
        if(Hash::check($request->password,$student->password)){
            session()->put('username',$student->name);
            session()->put('email',$student->email);
            
                   return redirect()->route('studentroom',compact('student'));
        }
        else{
            return redirect()->back()->with('msg','invalid email or password');
        }
    }
    else{
        return redirect()->back()->with('msg',' this email doesnot exist');
    }
       
    }
    //end of function

     //function to reurun lecturer room
     function studentRoom(){
        $email=session()->get('email');
        $name=session()->get('username');
        
            $student=Student::where('email',$email)->first();
            if($student->profile ===null){
            profile::create([
                'image'=>'images/avatar.png',//default image
                'phone'=>'+20_123_456_789',//default number
                'studentphone'=>'nullable',
                'country'=>'egypt',//default number
                'lecturer_id'=>null,//default number
                'student_id'=>$student->id,//default number

            ]);
            

            return view('student.studentroom',compact('student'));
        }
        else{
            return view('student.studentroom',compact('student'));

        }
            
        
        

    }
    //end of function
    //logout function for student
    function studentLogout(){
        session()->put('username',"");
        return redirect()->route('studentlogin');

    }
    //end of function
    //function to return the profile of the lecturer
    function studentProfile(){
       
        
        $email=session()->get('email');
        $student=Student::where('email',$email)->first();
       
        return view('student.studentprofile',compact('student'));
        
        
    }

    //end of function

    //function to update lecturer informations
    function update($id,Request $request){
       
            $this->validate($request,[
               
                'name'=>'required',
                'email'=>'required',
                'acadmicyear'=>'required',
                'phone'=>'required',
                'country'=>"required"
            ]);
        $student=Student::where('id',$id)->first();
     if($request->has('image')){
         $image=$request->file('image');
         $newimage=$image->hashName();
         $image->move('images/',$newimage);
         $student->profile->image='images/'.$newimage;
     }
            if($request->has('password')){
                $student->password=Hash::make($request->password);
            }
            $student->name=$request->name;
            $student->profile->studentphone=$request->phone;
            $student->profile->country=$request->country;
            $student->acadmicyear=$request->acadmicyear;
            $student->update();
            $student->profile->update();
            return redirect()->back()->with('success','informations updated successfuly');
     


    }
    //function return password view
    function password($id){
        
        $student=Student::where('id',$id)->first();
        return view('student.studentprofile2',compact('student'));
        
       
        

    }
    //end of function 
    // function to change password
    function changePassword($id,Request $request){
      
            $this->validate($request,[
                'currentpassword'=>'required',
                    'password'=>'required|min:8',
                    'repassword'=>'required',
            ]);
            $student=Student::where('id',$id)->first();
            if($request->password !== $request->repassword){
                return redirect()->back()->with('fail','two passowrds are not matched');
            }
            elseif(Hash::check($request->currentpassword,$student->password))
            {
                $student->password=Hash::make($request->password);
                $student->save();
                return redirect()->back()->with('success','password changed successfuly');
            }
            else{
                session()->put('username',"");
                return redirect()->route('studentlogin')->with('msg','Invalid current password you are unauthorized');
             
     
            }

       
        

    }
    //retuen setting view
    function setting(){
       
        $student=Student::where('email',session()->get('email'))->first();
        return view('studset',compact('student'));
        }
        
    

    //join to new room usin code
    function joinCodeStud($id,Request $request){
        $this->validate($request,[
            'code'=>'required'
        ]);
        $student=Student::find($id);
        $room=RoomCourse::where('code',$request->code)->first();
        $lecturer=Lecturer::find($room->lecturer_id);
        
        Notification::send($lecturer,new join($student,$room,'STUDENT'));
        event(new message($student->email.' send you request to join your room '.$room->name,$lecturer->id));
        return redirect()->route('studentroom');
    }
///// notification page
function Notification(){
   
        $student=Student::where('email',session()->get('email'))->first();
        return view('student.studentNotification',compact('student'));
        }
   
   //end of the function
        /// delete notification
        function deleteNotificationPage($student_id,$notifi_id){
            $student=Student::find($student_id);
            $student->notifications()->where('id',$notifi_id)->delete();
            return redirect()->back();
        }
        ///student Exam Room view
        function studentExamRoom($id,$code){
            $student=Student::find($id);
            $room=RoomCourse::where('code',$code)->first();
        
       
            
            return view('student.examRoom',compact(['student','room']));
        }
        //exam form for student
        function examForm($id,$exam_id){
            $student=Student::find($id);
            $exam=Exam::find($exam_id);
            
            date_default_timezone_set('Africa/cairo');
            if(studentResults::where('id',$student->id.$exam->id)->exists()){
                return back()->with('msg','you already submitted this exam');
            }
            else{
            if($exam->start_date <= date('Y-m-d H:i') && $exam->end_date >= date('Y-m-d H:i')  ){
          
           return view('student.exam',compact(['student','exam']));
            }
            else{
            return back()->with('msg','you cannot access this exam right now');
            }
    
             
        }
        }
        //studentCheckResults
        function studentCheckResults(Request $request,$id,$exam_id){
            $student=Student::find($id);
            $exam=Exam::find($exam_id);
         
            $mcq_questions=$exam->question()->where('type','MCQ')->get();
            $tf_questions=$exam->question()->where('type','True & False')->get();
            $essay_questions=$exam->question()->where('type','Essay')->get();
            $room=$exam->room()->first();
        
            $exam_degree=0;
            $questions=$exam->question()->get();
            foreach( $questions as    $question){
                $exam_degree +=  $question->question_degree;
            }

         $answer=array();
         $stop_words=array();
   
         $stop_words=['IS','ARE','AM','THE','A','AN','ABOUT','AT','AND','TO','OR','WAS','WERE','DO','DOES','DID','$','.','!','@','%','^','&','*','(',')','()','+','-','#','/',"'\'"]; 
         $student_answer;
         $total_degree=0;
    
         //MCQ QUESTION CHECK CORRCTNESS
        foreach( $mcq_questions as $mcq){
            if($request->{$mcq->name}===$mcq->correct_answer1){
                $total_degree+=$mcq->question_degree;
            }
        }
        //////////////////////////////////////////
        //TRUE OR FALSE QUESTION CHECK
        foreach( $tf_questions as $tf){
            if($request->{$tf->name}===$tf->correct_answer1){
                $total_degree+=$tf->question_degree;
            }
        }
        ////////////////////////////////////////////////////
        // ESSAY QUESTION CHECK

        foreach($essay_questions as $essay){
            $answers=[$essay->correct_answer1,$essay->correct_answer2,$essay->correct_answer3];
            $first_answers=[explode(" ",$essay->correct_answer1)[0],explode(" ",$essay->correct_answer2)[0],explode(" ",$essay->correct_answer3)[0]];
 
        $student_answer=explode(" ",strtoupper($request->{$essay->name}));
   
        
foreach($student_answer as $word){
        if(in_array($word,$stop_words)== 1){  
           
            array_splice($student_answer,array_search($word,$student_answer),1); 
}

}

/// check abourt the first correct answer  word in student answer array and remove any another words except NOT 

if(in_array($first_answers[0],$student_answer)==1){
    $first_index=array_search($first_answers[0],$student_answer);
   
    for($i=$first_index-1;$i>=0;$i--){
        if($student_answer[$i]==='NOT'){
    
            $first_index=$i;
            continue;
        }
        else{
         
            array_splice($student_answer,array_search($student_answer[$i],$student_answer),1); 
        }
    }
}
elseif(in_array($first_answers[1],$student_answer)==1){
    $first_index=array_search($first_answers[1],$student_answer);
    for($i=$first_index-1;$i>=0;--$i){
        if($student_answer[$i]==='NOT'){
    
            $first_index=$i;
            continue;
        }
        else{
            array_splice($student_answer,array_search($student_answer[$i],$student_answer),1); 
        }
    }
}
elseif(in_array($first_answers[2],$student_answer)){
    $first_index=array_search($first_answers[1],$student_answer);
    for($i=$first_index-1;$i>0;--$i){
        if($student_answer[$i]==='NOT'){
    
            $first_index=$i;
            continue;
        }
        else{
            array_splice($student_answer,array_search($student_answer[$i],$student_answer),1); 
        }
    }
}
else{
  $first_index=array_key_first($student_answer);
  
}


$final_student_answer=preg_replace('/[^A-Za-z0-9 ]/',null,implode(" ",$student_answer));

$final_degrees=array();//array to get the final rate of the student answer to three correct answers
$total_sum=0;//is used to get the average of the correctness ofthe answer
$min=0;
    $sum=0;
     $degree=0;

foreach($answers as $answer){
    
 $last_index=strlen($final_student_answer)+$first_index;
 


    
    if(strlen($answer)>=strlen($final_student_answer)){
        $min=strlen($final_student_answer);
    }
    else{
      
        $min=strlen($answer);
    }
  
    for($j=0;$j<$min;$j++){
        if($final_student_answer[$j]===$answer[$j]){
            $sum++;
        }
      

    }
 
    if($min==0){
        $degree=$min; 
    }
    else{
  $degree=($sum/$min)*100;
    }
    array_push($final_degrees,$degree);


}



for($i=0;$i<count($final_degrees);$i++){
$total_sum +=$final_degrees[$i];

}

if(($total_sum / count($final_degrees)) >= 85.0){
$total_degree+=$essay->question_degree;
}

}
if(studentResults::where('id',$student->id.$exam->id)->exists()){
    return view('student.results',compact('student'));
}
else{
studentResults::create([
    'id'=>strval($student->id.$exam->id),
    'student_id'=>$student->id,
    'exam_id'=>$exam->id,
    'lecturer_id'=>$exam->lecturer_id,
    'total_degree'=>$total_degree,
    'exam_degree'=>$exam_degree

]);
return view('student.results',compact('student'));
     //return redirect()->route('studentExamRoom',[$student->id,$room->code])->with('msg','exam degree is'.$total_degree);
    }
}

        /////////////////////////////////////////////////////////////////   
           

          function studentResultsPage($id){
            $student=Student::find($id);
            return view('student.results',compact('student'));
          } 
        
          function studentwhatsnew($id){
            $student=Student::find($id);
            return view('student.whatsnew',compact('student'));
          }   
        
        
        }
    


