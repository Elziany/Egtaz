@extends('basics.room')
@section('content')
       

    <!-- Main -->
    <div class="container">
        <div class="section">
            <h3 class="heads">General</h3>
            <a href="Room.html" class="data">
                <img src="../images/exam0.png" alt="Room">
                <p>{{__('room.room')}}</p>
            </a>
            <a href="notify.html" class="data">
                <img src="../images/bell.png" alt="Notifications">
                <p>{{__('room.notifications')}}</p>
            </a>
            <a href="choice.html" class="data">
                <img src="../images/add-user.png" alt="Add">
                <p>{{__('room.changeAccount')}}</p>
            </a>
        </div>
        
        <div class="section">
            <h3 class="heads">{{__('room.privacy')}}</h3>
           
            <a href="{{route('profile')}}" class="data">
            <img src="{{asset($lecturer->profile->image)}}" alt="Profile">
                <p>{{__('room.profile')}}</p>
            </a>
          
            
                    
            
            <a href="choice.html" class="data">
                <img src="../images/social.png" alt="Social Media">
                <p>{{__('room.social')}}</p>
            </a>
       
    @endsection
