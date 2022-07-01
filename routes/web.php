<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lecturerController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\languageController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\QuestionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'prevent-back-history'],function(){
//language switcher route
Route::get('lang/{lang}',[languageController::class,'switcher'])->name('lang');

//Lecturer Routes
Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/choice', function () {
    return view('choice');
})->name('choice');
Route::get('/team', function () {
    return view('Team');
})->name('team');

Route::get('/lecturersignup', [lecturerController::class,'lecturerSignup'])->name('lecturersignup');
Route::get('/lecturerlogin', [lecturerController::class,'lecturerLogin'])->name('lecturerlogin');
Route::post('/lecturerstore', [lecturerController::class,'lecturerStore'])->name('lecturerstore');
Route::post('/lecturercheck', [lecturerController::class,'lecturerCheck'])->name('lecturercheck');
Route::group(['middleware' => 'users'],function(){
Route::get('/lecturerroom', [lecturerController::class,'lecturerRoom'])->name('lecturerroom');
Route::get('/lecturerlogout', [lecturerController::class,'lecturerLogout'])->name('lecturerlogout');

Route::get('/lecturerprofile', [lecturerController::class,'lecturerProfile'])->name('profile');
Route::post('/lecturerupdate/{id}', [lecturerController::class,'update'])->name('lecturerupdate');
Route::get('/lecturerpassword/{id}', [lecturerController::class,'password'])->name('password');
Route::post('/changePassword/{id}', [lecturerController::class,'changePassword'])->name('changePassword');
Route::get('/lecturersetting', [lecturerController::class,'setting'])->name('setting');
Route::get('/form/{id}',[RoomController::class,'index'])->name('createForm');
Route::get('/create/{id}',[RoomController::class,'create'])->name('createRoom');
Route::get('/notification/{id}', [lecturerController::class,'lecturernotification'])->name('lecturernotification');
Route::get('/accept/{lecturer_id}/{student_id}/{code}/{notifi_id}',[LecturerController::class,'acceptReq'])->name('accept');
Route::get('/delete/{lecturer_id}/{notification_id}',[LecturerController::class,'deleteNotifcation'])->name('deleteNotification');
Route::get('/exam/room/{id}/{code}',[LecturerController::class,'examRoom'])->name('examRoom');
Route::get('/exam/room/creation/{id}/{code}',[LecturerController::class,'examCreatorPage'])->name('examCreatorPage');
Route::post('/create/new/exam/{id}/{code}',[ExamController::class,'createExam'])->name('createExam');
Route::get('/question/form/{id}/{code}/{exam_id}',[LecturerController::class,'questionForm'])->name('questionForm');
Route::post('/create/question/{id}/{exam_id}/{code}',[QuestionController::class,'createQuestion'])->name('createQuestion');
Route::get('/exam/form/{id}/{exam_id}',[LecturerController::class,'examForm'])->name('examForm');
Route::get('/exam/finish/{id}/{exam_id}/{code}',[ExamController::class,'examFinish'])->name('examFinish');
Route::get('/results/us/{id}',[LecturerController::class,'contactus'])->name('contactus');
Route::get('/whats/new/{id}',[LecturerController::class,'whatsnew'])->name('whatsnew');

});
//end of lecturer routes

//student routes
Route::get('/studentrsignup', [studentController::class,'studentregister'])->name('studentregister');
Route::get('/studentlogin', [studentController::class,'studentLogin'])->name('studentlogin');
Route::post('/studentstore', [studentController::class,'studentStore'])->name('studentstore');
Route::post('/studentcheck', [studentController::class,'studentCheck'])->name('studentcheck');
Route::group(['middleware' => 'users'],function(){
Route::get('/studentroom', [studentController::class,'studentRoom'])->name('studentroom');
Route::get('/studentlogout', [studentController::class,'studentLogout'])->name('studentlogout');
Route::get('/studentprofile', [studentController::class,'studentProfile'])->name('studentprofile');
Route::post('/studentupdate/{id}', [studentController::class,'update'])->name('studentupdate');
Route::get('/studentpassword/{id}', [studentController::class,'password'])->name('studentpassword');
Route::post('/changestudentPassword/{id}', [studentController::class,'changePassword'])->name('changeStudentPassword');
Route::get('/studentsetting', [studentController::class,'setting'])->name('studentsetting');
Route::get('/join/{id}',[RoomController::class,'joinform'])->name('joinRoomForm');
Route::post('/join_code/{id}',[StudentController::class,'joinCodeStud'])->name('joinCode');
Route::get('/student/notification/{id}',[StudentController::class,'Notification'])->name('notification');
Route::get('/student/delete/notification/{id}/{notify_id}',[StudentController::class,'deleteNotificationPage'])->name('deleteStudentNotification');
Route::get('/student/exam/{id}/{code}',[StudentController::class,'studentExamRoom'])->name('studentExamRoom');
Route::get('/student/exam/form/{id}/{exam_id}',[StudentController::class,'examform'])->name('studentExamform');
Route::post('/student/check/results/{id}/{exam_id}',[StudentController::class,'studentCheckResults'])->name('studentCheckResults');
Route::get('/student/results/{id}',[StudentController::class,'studentResultsPage'])->name('studentResultsPage');
Route::get('/student/whats/new/{id}',[StudentController::class,'studentwhatsnew'])->name('studentnew');
Route::get('/student/leaveRoom/{id}/{code}',[StudentController::class,'leaveRoom'])->name('leaveRoom');

});
});
