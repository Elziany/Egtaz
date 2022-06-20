@extends('basics.sturoom')
@section('content')
       

    <!-- Main -->
    <div class="container">
        <div class="section">
            <h3 class="heads">General</h3>
            <a href="Room.html" class="data">
                <img src="../images/exam0.png" alt="Room">
                <p>Rooms</p>
            </a>
            <a href="notify.html" class="data">
                <img src="../images/bell.png" alt="Notifications">
                <p>Notifications</p>
            </a>
            <a href="choice.html" class="data">
                <img src="../images/add-user.png" alt="Add">
                <p>Add An Account</p>
            </a>
        </div>
        
        <div class="section">
            <h3 class="heads">Privacy</h3>
           
            <a href="{{route('studentprofile')}}" class="data">
            <img src="{{asset($student->profile->image)}}" style="width:100px;height:100px; border-radius:50%" alt="Profile">
                <p>Profile</p>
            </a>
        
        
            <a href="choice.html" class="data">
                <img src="../images/social.png" alt="Social Media">
                <p>Our Social Media</p>
            </a>
        </div>
        
        <div class="section">
            <h3 class="heads">Our Platform Info</h3>
            <a href="Room.html" class="data">
                <img src="../images/feed.png" alt="Feedback">
                <p>Help & Feedback</p>
            </a>
            <a href="notify.html" class="data">
                <img src="../images/icons8-help-49.png" alt="Contact">
                <p>Contact US</p>
            </a>
            <a href="choice.html" class="data">
                <img src="../images/about.png" alt="About">
                <p>About Us</p>
            </a>
        </div>
    </div>
    @endsection
