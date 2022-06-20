<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form - Student</title>
        <!-- Swiper CDN -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- Main CSS Files -->
    <link rel="stylesheet" href="../css/login2.css">
        <!-- Logo Icon -->
    <link rel="icon" href="../images/egtaz-logo2.png">
        <!-- bootstrap CSS Files -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
@if($msg=Session::get('msg'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong><h3>{{$msg}}</h3></strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif
    
<!-- Start Book section -->
    <section class="book" id="book">
        <h1 class="heading">{{__('student_login.login_as')}} <span>{{__('student_login.student')}} </span></h1>
        <div class="row">
            <form action="{{route('studentcheck')}}" method="POST">
                @csrf
                <div class="inputBox">
                    <h3>{{__('student_login.email')}} </h3>
                    <input type="email" name="email" placeholder="example@gmail.com" required>
                </div>
                <div class="inputBox">
                    <h3>{{__('student_login.password')}} </h3>
                    <input type="password"name="password" placeholder="*********" required>
                </div>
                <button role="button" type="submit"class="btnlogin">{{__('student_login.login')}} </button>
                <a href="{{route('choice')}}" class="link">{{__('student_login.back')}} </a>
            </form>
            <div class="image">
                <img src="../images/student.jpg" alt="Student">
            </div>
        </div>
    </section>
<!-- End Book section -->
<script src="../js/bootstrap.js"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/popper.min.js"></script>

</body>

</html>