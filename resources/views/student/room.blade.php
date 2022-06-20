<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egtaz Room</title>
        <!-- Unicode Link -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <!-- Main CSS Files -->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/room.css">
        <!-- Logo Icon -->
    <link rel="icon" href="../images/egtaz-logo2.png">
</head>
<body data-theme="light">

        <!-- header -->
        <header class="header center">
            <div class="nav-left">
                <img src="../images/menu.png" class="menu" alt="menu">
                <img src="../images/logo.png" class="logo" alt="logo">
            </div>
            <div class="search__bar">
                <i class="uil uil-search search__icon center"></i>
                <input type="text" placeholder="Search anything" class="search__input">
            </div>
            <div class="header__buttons center">
                <button class="change__theme-btn"><i class="uil uil-sun theme__icon"></i></button>
                <div class="dropdown">
                    <button class="header__btn center"><i class="uil uil-bell dropdown__icon"></i></button>
                    <div class="dropdown__content notifictaions__dropdown">
                        <h3 class="drop__down-title">Notifications</h3>
                        <div class="dropdown__data">
                            <a href="" class="drop__down-link"><b>New Exam Created By</b> Dr. Ahmed Zkaria</a>
                            <a href="" class="drop__down-link"><b>You Were Added In Room By</b> Dr. Shymaa Ali</a>
                            <a href="" class="drop__down-link"><b>You Were Sent Off Form Room By</b>Dr. Emad Gamal</a>
                            <a href="" class="drop__down-link"><b>You Submitted The Exam</b>View Your Model Answer</a>
                            <a href="notify.html" class="drop__down-link"><b>See More...</b></a>
                        </div>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="header__btn center"><i class="uil uil-user-circle dropdown__icon"></i></button>
                    <div class="dropdown__content profile__dropdown">
                        <h3 class="drop__down-title">Profile settings</h3>
                        <div class="dropdown__data">
                            <div>
                                <a href="profile.html"><b>View Profile</b></a>
                            </div>
                            <div>
                                <a href="set.html" class="drop__down-link"><i class="uil uil-setting"></i> <b>Settings</b></a>
                            <a href="" class="drop__down-link"><i class="uil uil-file-plus-alt"></i> <b>What's New</b></a>
                            <a href="" class="drop__down-link"><i class="uil uil-message"></i> <b>Contact Us</b></a>
                            </div>
                                <a href="choice.html" class="drop__down-link"><i class="uil uil-sign-out-alt"></i> <b>Logout</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Side Bar -->
    <div class="sidebar">
        <div class="shortcut-links">
            <a href="../index.html"><img src="../images/online-learning.png" alt="home"><p>Home</p></a>
            <a href="room.html"><img src="../images/exam0.png" alt="exam"><p>Room</p></a>
            <a href="profile.html"><img src="../images/cv.png" alt="profile"><p>Profile</p></a>
            <a href="{{route('studentsetting',session()->get(')}}"><img src="../images/setting.png" alt="setting"><p>Settings</p></a>
            <a href="notify.html"><img src="../images/bell.png" alt="notification"><p>Notifications</p></a>
            <a href=""><img src="../images/new.png" alt="new"><p>What's New</p></a>
            <a href="choice.html"><img src="../images/add-user.png" alt="add-user"><p>Add Account</p></a>
            <a href=""><img src="../images/icons8-help-49.png" alt="contact"><p>Contact Us</p></a>
            <hr>
        </div>
    </div>

        <!-- Main -->
    <div class="container">
        <div class="banner">
            <img src="../images/trivial-exam.jpg" alt="trivial-exam" title="Trivial Exam">
        </div>
        <div class="list-container">
            <div class="vid-list">
                <a href=""><img src="../images/exam1.jpg" alt="exam1" class="thumbnail"></a>
                <div class="flex-dev">
                    <img src="../images/lecturer.png" alt="lecturer">
                    <div class="vid-info">
                        <a href="">Computer Science Coures for Developers</a>
                        <p>Dr. Ashraf Emad</p>
                        <p>200 Students</p>
                    </div>
                </div>
            </div>

            z
    <script src="../js/index.js"></script>
</body>
</html>