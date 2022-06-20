<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form - Lecturer</title>
        <!-- Swiper CDN -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- Main CSS Files -->
    <link rel="stylesheet" href="../css/signup.css"/>
       <!-- bootstrap CSS Files -->
       <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

        <!-- Logo Icon -->
    <link rel="icon" href="../images/egtaz-logo2.png">
</head>
<body>
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
<!-- Start Book section -->
    <section class="book" id="book">
        <h1 class="heading">{{__('lecturer_signup.sign_up_as')}} <span>{{__('lecturer_signup.lecturer')}}</span></h1>
        <div class="row">
            <form action="{{route('lecturerstore')}}" method="post">
                @csrf
                <div class="inputBox">
                    <h3>{{__('lecturer_signup.full_name')}}</h3>
                    <input type="text" name="name" placeholder="Place Your Name" required>
                </div>
                <div class="inputBox">
                    <h3>{{__('lecturer_signup.email')}}</h3>
                    <input type="email" name="email"placeholder="example@gmail.com" required>
 
                
                </div>
               
                <div class="inputBox">
                    <h3>{{__('lecturer_signup.password')}}</h3>
                    <input type="password"name="password" placeholder="*********" required>
 
                </div>
                <div class="inputBox">
                    <h3>{{__('lecturer_signup.repassword')}}</h3>
                    <input type="password"name="repassword" placeholder="*********" required>
                </div>
                <div class="inputBox">
                    <h3>{{__('lecturer_signup.specialization')}}</h3>
                    <input type="text"  name="specialization" placeholder="specialization" required>
                </div>
                <button type="submit" class="btnsignup">{{__('lecturer_signup.sign_up')}}</button>
                <a href="{{route('choice')}}" class="link">{{__('lecturer_signup.back')}}</a>
            </form>
            <div class="image">
                <img src="../images/teacher.jpg" alt="Lecturer">
            </div>
        </div>
    </section>
<!-- End Book section -->
     <!-- Bootstrap Files -->
     <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/popper.min.js"></script>

</body>
</html>