
@extends('basics.room')
@section('content')

@if($msg=Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><h3>{{$msg}}</h3></strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif>
        <!-- Main -->
    <div class="container">
        <div class="banner">
            <img src="../images/banner.jpg" alt="trivial-exam" title="Trivial Exam">
        </div>
        <div class="list-container">
           

           @foreach($lecturer->room as $room)

            <div class="vid-list">
                <a href="{{route('examRoom',[$lecturer->id,$room->code])}}"><img id="mySrcImage" src="{{asset($room->icon)}}" alt="exam3" class="thumbnail"></a>
                <div class="flex-dev">
                    <img src="../images/lecturer.png" alt="lecturer">
                    <div class="vid-info">
                        <a href="">{{$room->subject}}</a>
                        <p>Code: {{$room->code}}
                        <br>
                         Student Numbers : {{$room->studentRoom->count()}}
                            <br>
                          Dr:  {{$lecturer->name}}
                          
                        </p>
                        
                    </div>
                </div>
            </div>
            @endforeach

    </div>
        <!-- Join By Code -->
        <a href="{{route('createForm',$lecturer->id)}}"><img src="{{asset('images/code.png')}}" id="myBtn" title="{{__('room.create_room')}}"></a>
    @endsection
    
  