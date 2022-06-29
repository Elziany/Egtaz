@extends('basics.room')
@section('content')
<div class="container">
        <div class="banner">
            <img src="{{asset('../images/banner.jpg')}}" alt="trivial-exam" title="Trivial Exam">
        </div>
        <div class="list-container">
        @foreach($exams as $exam)
        
        
            <div class="vid-list">
                <a href="{{route('examForm',[$lecturer->id,$exam->id])}}"><img src="{{asset($exam->image)}}" alt="exam1" class="thumbnail"></a>
                <div class="flex-dev">
                    <img src="{{asset('../images/lecturer.png')}}" alt="lecturer">
                    <div class="vid-info">
                        <a href="">{{$exam->exam_name}}</a>
                        <p>Dr:{{$lecturer->name}}
                            <br>
                            start date:{{$exam->start_date}}
                            <br>
                       
                        </p>
                        
                        
                    </div>
                </div>
            </div>
        
            @endforeach
<a href="{{route('examCreatorPage',[$lecturer->id,$code])}}"><img src="{{asset('../images/quest.png')}}" id="myBtn" title="{{__('room.create_question')}}"></a>
@endsection