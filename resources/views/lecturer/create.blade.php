<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Room</title>
        <!-- Unicode Link -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <!-- Main CSS Files -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/create.css')}}">
        <!-- Logo Icon -->
    <link rel="icon" href="../images/new-egtaz-2.png">
</head>
<body>

        <!-- Main -->
    <div class="main">

        <div class="title">
            <h1 class="heading">Create <span>Room</span></h1>
        </div>

        <div class="signed">
            <span>You're currently signed in as</span>
            <div class="one">
                <div class="det">
                    <img src="../images/cv.png" alt="user">
                    <div class="details">
                        <h3>{{$lecturer->name}}</h3>
                        <p>{{$lecturer->email}}</p>
                    </div>
                </div>
                <a href="{{route('lecturerlogout')}}"><button>Switch account</button></a>
            </div>
        </div>
    
        <div class="code">
            <h2>Create Room</h2>
            <span>Fill the requiring inputs to create room</span>
            <form action="{{route('createRoom',$lecturer->id)}}">
                <div class="inp">
                    <input type="text" name="name" placeholder="Room Name" required>
                </div>
              
                <div class="inp">
                    <input type="text" name="subject" placeholder="Subject" required>
                </div>
                
                <button type="submit">Create</button>
            </form>
        </div>
    </div>

    <script src="{{asset('js/main.')}}"></script>

</body>
</html>
