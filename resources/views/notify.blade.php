<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egtaz Platform - Notifications</title>
        <!-- Unicode Link -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <!-- Main CSS Files -->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/notify.css">
        <!-- Logo Icon -->
    <link rel="icon" href="images/egtaz-logo2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <a href="set.html"><img src="../images/setting.png" alt="setting"><p>Settings</p></a>
            <a href="notify.html"><img src="../images/bell.png" alt="notification"><p>Notifications</p></a>
            <a href=""><img src="../images/new.png" alt="new"><p>What's New</p></a>
            <a href="choice.html"><img src="../images/add-user.png" alt="add-user"><p>Add Account</p></a>
            <a href=""><img src="../images/icons8-help-49.png" alt="contact"><p>Contact Us</p></a>
            <hr>
        </div>
    </div>

    <!-- Main -->
    <div class="container">
        <div class="note">
            <div class="imgs">
                <img src="../images/lecturer.png" alt="">
            </div>
            <div class="txt">
                <p><b>Dr. Ahmed Zkaria</b></p>
                <span>New Exam Created By</span>
            </div>
        </div>
        <div class="note">
            <div class="imgs">
                <img src="../images/lecturer.png" alt="">
            </div>
            <div class="txt">
                <p><b>Dr. Shymaa Ali</b></p>
                <span>You Were Added In Room By</span>
            </div>
        </div>
        <div class="note">
            <div class="imgs">
                <img src="../images/lecturer.png" alt="">
            </div>
            <div class="txt">
                <p><b>Dr. Emad Gamal</b></p>
                <span>You Were Sent Off Form Room By</span>
            </div>
        </div>
        <div class="note">
            <div class="imgs">
                <img src="../images/sys.png" alt="">
            </div>
            <div class="txt">
                <p><b>View Your Model Answer</b></p>
                <span>You Submitted The Exam</span>
            </div>
        </div>
        <div class="note">
            <div class="imgs">
                <img src="../images/sys.png" alt="">
            </div>
            <div class="txt">
                <p><b>You Can't View Your Model Answer</b></p>
                <span>You Didn't Submit The Exam</span>
            </div>
        </div>
        <div class="note">
            <div class="imgs">
                <img src="../images/sys.png" alt="">
            </div>
            <div class="txt">
                <p><b>View Your New Look</b></p>
                <span>You Changed Your Profile</span>
            </div>
        </div>
        <div class="note">
            <div class="imgs">
                <img src="../images/sys.png" alt="">
            </div>
            <div class="txt">
                <p><b>View What's New In Our Platform</b></p>
                <span>Check The New Features</span>
            </div>
        </div>
    </div>

    <script src="../js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>