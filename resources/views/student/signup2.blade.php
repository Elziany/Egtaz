<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form - Student</title>
        <!-- Swiper CDN -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- Main CSS Files -->
    <link rel="stylesheet" href="../css/signup2.css">
        <!-- Logo Icon -->
    <link rel="icon" href="../images/egtaz-logo2.png">
           <!-- bootstrap CSS Files -->
           <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    
<!-- Start Book section -->
    <section class="book" id="book">
        <h1 class="heading">{{__('student_signup.signup_as')}} <span>{{__('student_signup.student')}}</span></h1>
        @if($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong><h3>{{$error}}</h3></strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endforeach
@endif
@if($msg=Session::get('msg'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{$msg}}</strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif
        <div class="row">
            <form action="{{route('studentstore')}}" method="post">
                @csrf
                <div class="inputBox">
                    <h3>{{__('student_signup.full_name')}}</h3>
                    <input type="text" name="name" placeholder="Place Your Name" required>
                </div>
                <div class="inputBox">
                    <h3>{{__('student_signup.email')}}</h3>
                    <input type="email" name="email"placeholder="example@gmail.com" required>
                </div>
             
                <div class="inputBox">
                    <h3>{{__('student_signup.password')}}</h3>
                    <input type="password" name="password"placeholder="*********" required>
                </div>
                <div class="inputBox">
                    <h3>{{__('student_signup.repassword')}}</h3>
                    <input type="password" name="repassword"placeholder="*********" required>
                </div>
                <div class="inputBox">
                    <h3>{{__('student_signup.year')}}</h3>
                    <input type="text" name="acadmicyear" placeholder="acadmicyear" required>
                </div>
                <button type="submit" class="registbtn">{{__('student_signup.signup')}}</button>
                <a href="{{route('choice')}}" class="link">{{__('student_signup.back')}}</a>
            </form>
            <div class="image">
                <img src="../images/student.jpg" alt="Student">
            </div>
        </div>
    </section>
<!-- End Book section -->

<script src="../js/bootstrap.js"></script>
</body>

</html>