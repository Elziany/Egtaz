@extends('basics.sturoom')
@section('content')



<div class="container">
@if($msg=Session::get('msg'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{$msg}}</strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif
        <div class="banner">
            <img src="{{asset('../images/banner.jpg')}}" alt="trivial-exam" title="Trivial Exam">
        </div>
        <div class="list-container">
    @foreach($room->exams as $exam)
     
            <div class="vid-list">
                <a href="{{route('studentExamform',[$student->id,$exam->id])}}"><img src="{{asset($exam->image)}}" alt="exam1" class="thumbnail"></a>
                <div class="flex-dev">
                    <img src="{{asset('../images/lecturer.png')}}" alt="lecturer">
                    <div class="vid-info">
                    <a href="">{{$exam->exam_name}}</a>
                        <p>Dr:{{$room->lecturer->email}}
                            <br>
                            start date:{{$exam->start_date}}
                            <br>
                            start time:{{$exam->start_time}}
                        </p>
                        
                        
                    </div>
                </div>
            </div>
            @endforeach
            <a href="{{route('leaveRoom',[$student->id,$room->id])}}"><img src="{{asset('images/feed.png')}}" id="myBtn" title="leave room"></a>            

@endsection