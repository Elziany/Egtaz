
@extends('basics.sturoom')
@section('content')
        <!-- Main -->
    <div class="container">
        <div class="banner">
            <img src="../images/banner.jpg" alt="trivial-exam" title="Trivial Exam">
        </div>
        <div class="list-container">
           @foreach($student->studentRoom as $sroom)
          
            <div class="vid-list">
                <a href="{{route('studentExamRoom',[$student->id,$student->room($sroom->room_id)->code])}}"><img src="{{ $student->room($sroom->room_id)->icon}}" alt="exam1" class="thumbnail"></a>
                <div class="flex-dev">
                    <img src="../images/lecturer.png" alt="lecturer">
                    <div class="vid-info">
                   
                        <a href="{{route('studentExamRoom',[$student->id,$student->room($sroom->room_id)->code])}}"></a>
                        <p><b>{{ $student->room($sroom->room_id)->name}} </b>
                        
                        <br>
                        {{ $student->room($sroom->room_id)->subject}}<br>
                        {{ $student->room($sroom->room_id)->code}}
                  
                    </p>
                    </div>
                </div>
            </div>
         
@endforeach
           

    </div>
    <a href="{{route('joinRoomForm',$student->id)}}"><img src="../images/scode.png" id="myBtn" title="{{__('room.join_room')}}"></a>

    @endsection
    
  