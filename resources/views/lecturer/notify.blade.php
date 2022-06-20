@extends('basics.room')
@section('content')

    <!-- Main -->
    <div class="container">
        @foreach($lecturer->notifications as $notification)
        <div class="note">
            <div class="imgs">
                <img src="../images/lecturer.png" alt="">
            </div>
            <div class="txt">
                <p><b>{{$notification->data['user_name']}}</b></p>
                
                <span>{{$notification->data['data']}}</span><br>
                
                <a href="{{route('accept',[$lecturer->id,$notification->data['user_id'],$notification->data['code'],$notification->id])}}"  
                    class="btn btn-success">{{__('room.accept')}} </a>
                <a href="{{route('deleteNotification',[$lecturer->id,$notification->id])}}" class="btn btn-danger">{{__('room.delete')}}</a>
            
            </div>
        </div>
        @endforeach
  
       

 @endsection