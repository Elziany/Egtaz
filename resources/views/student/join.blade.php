<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Room</title>
        <!-- Unicode Link -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <!-- Main CSS Files -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/join.css">
        <!-- Logo Icon -->
    <link rel="icon" href="../images/new-egtaz-2.png">
</head>
<body>

        <!-- Main -->
    <div class="main">

        <div class="title">
            <h1 class="heading">{{__('room.join')}}<span>{{__('room.room')}}</span></h1>
        </div>

        <div class="signed">
            <span>You're currently signed in as</span>
            <div class="one">
                <div class="det">
                    <img src="../images/cv.png" alt="user">
                    <div class="details">
                        <h3>{{$student->name}}</h3>
                        <p>{{$student->email}}</p>
                    </div>
                </div>
                <a href="../../choice.html"><button>{{__('room.switch_account')}}</button></a>
            </div>
        </div>
    
        <div class="code">
            <h2>{{__('room.room')}}  {{__('room.code')}}</h2>
            <span>{{__('room.ask')}}.</span>
            <form class="inp" action="{{route('joinCode',$student->id)}}" method='POST'>
                @csrf
                <input type="text"  name="code" placeholder="  {{__('room.code')}}" required>
                <button>{{__('room.join')}}</button>
            </form>
        </div>

        <div class="rules">
            <h3>To sign in with a room code</h3>
            <ul>
                <li>Use an authorized account</li>
                <li>Use a class code with 5-7 letters or numbers, and no spaces or symbols</li>
            </ul>
            <p>If you have trouble joining the class, go to the <a href="{{route('studentlogout')}}">Help Center article</a></p>
        </div>
    </div>

    

    <script src="../js/main.js"></script>

</body>
</html>