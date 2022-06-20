@extends('basics.sturoom')
@section('content')
  <!-- Main -->
  <div class="container">
        @foreach($student->notifications as $notification)
        <div class="note">
            <div class="imgs">
                <img src="{{asset('../images/lecturer.png')}}" alt="">
            </div>
            <div class="txt">
                
                
                <span>{{$notification->data['data']}}</span><br>
                
               
                <a href="{{route('deleteStudentNotification',[$student->id,$notification->id])}}" class="btn btn-danger">{{__('room.delete')}} </a>
            
            </div>
        </div>
        @endforeach
@endsection