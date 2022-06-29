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
class lecturerController extends Controller

{
    //register page for lecturer
    function lecturerSignup(){
        return view('lecturer.signup');
    }
    //end of function

    //login page for lecturer
    function lecturerLogin(){
        return view('lecturer.login');
    }
    //end of function
    //create new lecturer account
    function lecturerStore(Request $request){
        $this->validate($request,[
            'name'=>"required",
            'email'=>"required|unique:lecturer|unique:student",
            'password'=>"required|min:8",
            'repassword'=>"required",
            'specialization'=>"required"

        ]);
        $pass=$request->password;
        $repass=$request->repassword;
        if($pass===$repass){
           $lecturer= Lecturer::create([
                    'name'=>$request->name,
                    'password'=>Hash::make($request->password),
                    'email'=>$request->email,
                    'specialization'=>$request->specialization
            ]);
            session()->put('username',$lecturer->name);
            session()->put('email',$lecturer->email);
            
                   return redirect()->route('lecturerroom',compact('lecturer'));

        }
        else{
            return redirect()->back()->with('msg','password is not matched');
        }
    }
    //end of function
    //check for lecturer loggining 
    function lecturerCheck(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);
        $lecturer=Lecturer::where('email',$request->email)->first();
        if($lecturer !==null){
        if(Hash::check($request->password,$lecturer->password)){
            session()->put('username',$lecturer->name);
            session()->put('email',$lecturer->email);
            
                   return redirect()->route('lecturerroom',compact('lecturer'));
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
     function lecturerRoom(){
        $email=session()->get('email');
       
       
            $lecturer=Lecturer::where('email',$email)->first();
            if($lecturer->profile===null){
            profile::create([
                'image'=>'images/avatar.png',//default image
                'phone'=>null,//default number
                'studentphone'=>'nullable',
                'country'=>' ',//default number
                'lecturer_id'=>$lecturer->id,//default number
                'student_id'=>null

            ]);

            return view('lecturer.lecturerroom',compact('lecturer'));
        }
        else{
            return view('lecturer.lecturerroom',compact('lecturer'));
        }
            
       

    }
    //end of function
    //logout function for lecturer
    function lecturerLogout(){
        session()->put('username',"");
        return redirect()->route('lecturerlogin');

    }
    //end of function
    //function to return the profile of the lecturer
    function lecturerProfile(){
       
       
        $email=session()->get('email');
        $lecturer=Lecturer::where('email',$email)->first();
       
        return view('lecturer.profile',compact('lecturer'));
        
        
    }

    //end of function

    //function to update lecturer informations
    function update($id,Request $request){
        
            $this->validate($request,[
               
                'name'=>'required',
                'email'=>'required',
                'specialization'=>'required',
                'phone'=>'required',
                'country'=>"required"
            ]);
        $lecturer=Lecturer::where('id',$id)->first();
     if($request->has('image')){
         $image=$request->file('image');
         $newimage=$image->hashName();
         $image->move('images/',$newimage);
         $lecturer->profile->image='images/'.$newimage;
     }
            if($request->has('password')){
                $lecturer->password=Hash::make($request->password);
            }
            $lecturer->name=$request->name;
            $lecturer->profile->phone=$request->phone;
            $lecturer->profile->country=$request->country;
            $lecturer->specialization=$request->specialization;
            $lecturer->update();
            $lecturer->profile->update();
            return redirect()->back()->with('success','informations updated successfuly');;
        
       


    }
    //function return password view
    function password($id){
        
        $lecturer=Lecturer::where('id',$id)->first();
        return view('lecturer.profile1',compact('lecturer'));
        }
       
        

    
    //end of function 
    // function to change password
    function changePassword($id,Request $request){
   
            $this->validate($request,[
                'currentpassword'=>'required',
                    'password'=>'required|min:8',
                    'repassword'=>'required',
            ]);
            $lecturer=Lecturer::where('id',$id)->first();
            if($request->password !== $request->repassword){
                return redirect()->back()->with('fail','two passowrds are not matched');
            }
            elseif(Hash::check($request->currentpassword,$lecturer->password))
            {
                $lecturer->password=Hash::make($request->password);
                $lecturer->save();
                return redirect()->back()->with('success','password changed successfuly');
            }
            else{
                return redirect()->back()->with('fail','current password is incorrect');

             
     
            }

       
        

    }
    //retuen setting view
    function setting(){
        
        $lecturer=Lecturer::where('email',session()->get('email'))->first();
        return view('set',compact('lecturer'));
        
        
    }
///// notification page
function lecturernotification(){
    
        $lecturer=Lecturer::where('email',session()->get('email'))->first();
        return view('lecturer.notify',compact('lecturer'));
        }
        
    
        //// accept to join to room 
    function acceptReq($lecturer_id,$student_id,$code,$notifi_id){
     
        $room=RoomCourse::where('code',$code)->first();
        studentRoom::create([
            'student_id'=>$student_id,
            'room_id'=>$room->id
        ]);
      
       $student=Student::where('id',$student_id)->first();
       $lecturer=Lecturer::where('id',$lecturer_id)->first();
       $lecturer->notifications()->where('id',$notifi_id)->update(['read_at'=>now()]);
       Notification::send($student,new join($lecturer,$room,'LECTURER'));
       event(new studentMessage($lecturer->email.'  accepted your request',$student->id));
        return redirect()->back();
        }
        /// delete notification
        function deleteNotifcation($lecturer_id,$notifi_id){
            $lecturer=Lecturer::find($lecturer_id);
            $lecturer->notifications()->where('id',$notifi_id)->delete();
            return redirect()->back();
        }
          /// exam room
          function examRoom($id,$code){
            $lecturer=Lecturer::find($id);
            $exams=$lecturer->exam->where('room_code',$code);
            
           
           return view('lecturer.examRoom',compact(['lecturer','code','exams']));
           
        }
        //create page of the exam
        function examCreatorPage($id,$code){
            $lecturer=Lecturer::find($id);
            $room=$lecturer->room()->where('code',$code)->first();
          
           return view('lecturer.examCreationPage',compact(['lecturer','code']));
           
        }
        // create questions of the exam
        function questionForm($id,$code,$exam_id){
            $lecturer=Lecturer::find($id);
            
          
           return view('lecturer.lecturerQuestion',compact(['lecturer','exam_id','code']));
           
        }
        function examForm($id,$exam_id){
            $lecturer=Lecturer::find($id);
            $exam=Exam::find($exam_id);
      
            
          
           return view('lecturer.exam',compact(['lecturer','exam']));
           
        }
        function contactus($id){
            $lecturer=Lecturer::find($id);
           return view('lecturer.contactus',compact('lecturer'));
           
        }
        function whatsnew($id){
            $lecturer=Lecturer::find($id);
           return view('lecturer.whatsnew',compact('lecturer'));
           
        }
    }



