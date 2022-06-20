<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egtaz Room</title>
        <!-- Unicode Link -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
        <!-- Main CSS Files -->
    <link rel="stylesheet" href="{{asset('../css/main.css')}}">
    <link rel="stylesheet" href="{{asset('../css/room.css')}}">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/notify.css">
    <link rel="stylesheet" href="{{asset ('../css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('../css/new.css')}}">
        <!-- Logo Icon -->
    <link rel="icon" href="{{asset('../images/new-egtaz-2.png')}}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="user-id" content="{{Auth::check() ? Auth::Lecturer()->id:''}}">
</head>
<body data-theme="light">
    
        <!-- header -->
    <header class="header center">
        <div class="nav-left">
            <img src="{{asset('../images/menu.png')}}" class="menu" alt="menu">
            <img src="{{asset('../images/new-egtaz-2.png')}}" class="logo" alt="logo">
        </div>
        <div class="search__bar">
            <i class="uil uil-search search__icon center"></i>
            <input type="text" placeholder="Search anything" class="search__input">
        </div>
        <div class="header__buttons center">
            <button class="change__theme-btn"><i class="uil uil-sun theme__icon"></i></button>
            <div class="dropdown">
                <button class="header__btn center"><i class="uil uil-bell dropdown__icon" id="bell"></i></button>
                <div class="dropdown__content notifictaions__dropdown">
                    <h3 class="drop__down-title">Notifications</h3>
                    <div class="dropdown__data">
                    <a  href="{{route('lecturernotification',$lecturer->id)}}" class="drop__down-link"><b id="code"></b> </a>
                        @foreach($lecturer->unreadnotifications as $notification)

                        
                        <a  href="{{route('lecturernotification',$lecturer->id)}}" class="drop__down-link"><b >{{$notification->data['user_email']}}</b> {{$notification->data['data']}}</a>
                       
                       
                         @endforeach
                        <a  href="{{route('lecturernotification',$lecturer->id)}}" class="drop__down-link"><b>See More...</b></a>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <button class="header__btn center"><i class="uil uil-user-circle dropdown__icon"></i></button>
                <div class="dropdown__content profile__dropdown">
                    <h3 class="drop__down-title">{{__('room.profile_settings')}}</h3>
                    <div class="dropdown__data">
                        <div>
                            <a href="{{route('profile')}}"><b>{{$lecturer->name}}</b></a>
                        </div>
                        <div>
                            <a href="{{route('setting')}}" class="drop__down-link"><i class="uil uil-setting"></i> <b>{{__('room.setting')}}</b></a>
                            <a href="new.html" class="drop__down-link"><i class="uil uil-file-plus-alt"></i> <b>{{__('room.whatsnew')}}</b></a>
                            <a href="{{route('contactus',$lecturer->id)}}" class="drop__down-link"><i class="uil uil-message"></i> <b>{{__('room.results')}}</b></a>
                        </div>
                            <a href="{{route('lecturerlogout')}}" class="drop__down-link"><i class="uil uil-sign-out-alt"></i> <b>{{__('room.logout')}}</b></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

        <!-- Side Bar -->
    <div class="sidebar">
        <div class="shortcut-links">
            <a href="{{route('lecturerroom')}}"><img src="{{asset('../images/online-learning.png')}}" alt="home"><p>{{__('room.home')}}</p></a>
            <a href="{{route('lecturerroom')}}"><img src="{{asset('../images/exam0.png')}}" alt="exam"><p>{{__('room.room')}}</p></a>
            <a href="{{route('profile')}}"><img src="{{asset('../images/cv.png')}}" alt="profile"><p>{{__('room.profile')}}</p></a>
            <a href="{{route('setting')}}"><img src="{{asset('../images/setting.png')}}" alt="setting"><p>{{__('room.setting')}}</p></a>
            <a href="{{route('lecturernotification',$lecturer->id)}}"><img src="{{asset('../images/bell.png')}}" alt="notification"><p>{{__('room.notifications')}}</p></a>
            <a href="{{route('whatsnew',$lecturer->id)}}"><img src="{{asset('../images/new.png')}}" alt="new"><p>{{__('room.whatsnew')}}</p></a>
            <a href="{{route('lecturerlogout')}}"><img src="{{asset('../images/add-user.png')}}" alt="add-user"><p>{{__('room.changeAccount')}}</p></a>
            <a href="{{route('contactus',$lecturer->id)}}"><img src="{{asset('../images/icons8-help-49.png')}}" alt="contact"><p>{{__('room.results')}}</p></a>
            <hr>
        </div>
    </div>

    

    <div>
        @yield('content')
     
</div>
        
    
       
   

</body>
     <!-- Bootstrap Files -->
     <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Main Js Files -->
    <script src="../js/profile.js"></script>
    <script src="{{asset('../js/index.js')}}"></script>
    <script src="/js/app.js"></script>
    <script>
        
        var ele=document.querySelector('#code');
        var bell=document.querySelector('#bell');
        var lecturer_id={{$lecturer->id}};
        var channel = Echo.channel('myChannel');
        
channel.listen('message', function(data) {
    if(lecturer_id == parseInt(data['user_id'])){
        bell.style.color='red';
        ele.innerHTML=JSON.stringify(data['message']);
    }
});
    </script>
</html>