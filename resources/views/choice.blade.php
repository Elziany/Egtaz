<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egtaz Registration Form</title>
        <!-- Main CSS Files -->
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/choice.css')}}">    
        <!-- Bootstrap Files -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <!-- Logo Icon -->
    <link rel="icon" href="{{asset('images/egtaz-logo2.png')}}">
</head>
<body>
    
        <!-- header -->
    <nav class="flex-div">
        <div class="nav-left">
            <img src="{{asset('images/logo.png')}}" class="logo" alt="logo">
        </div>
        
        <div class="nav-right">
            <div class="profile" title="Profile">
                <a href="{{route('lang','en')}}" class="en" title="English">En</a>
                <a href="{{route('lang','ar')}}"class="ar" title="Arabic">Ar</a>
            </div>
        </div>
            
        
    </nav>

    <!-- Main -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="../images/teacher.jpg" class="card-img-top" alt="Lecturer">
                    <div class="card-body">
                        <h3 class="card-title">{{__('choice.lecturer')}}</h3>
                        <p class="card-text"> {{__('choice.register_l')}}</p>
                        <div class="row">
                            <a role="button" href="{{route('lecturersignup')}}" class="btn col-md-6 lecBtn">{{__('choice.register')}}</a>
                            <a role="button" href="{{route('lecturerlogin')}}" class="btn col-md-6 lecBtn2">{{__('choice.login')}}</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <img src="../images/student.jpg" class="card-img-top" alt="Student">
                    <div class="card-body">
                        <h3 class="card-title">{{__('choice.student')}}</h3>
                        <p class="card-text">{{__('choice.register_s')}}</p>
                        <div class="row">
                            <a role="button" href="{{route('studentregister')}}" class="btn col-md-6 stdBtn btn-success">{{__('choice.register')}}</a>
                            <a role="button" href="{{route('studentlogin')}}" class="btn col-md-6 stdBtn2 btn-outline-success">{{__('choice.login')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Bootstrap Files -->
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/popper.min.js"></script>
        <!-- Main Js Files -->
    <script src="../js/index.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>