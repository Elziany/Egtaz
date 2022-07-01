<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== BOXICONS ===============-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/styles2.css')}}">


      <title>Egtaz platform</title>
      
      <link rel="icon" href="assets/images/new-egtaz-2.png">

   </head>
   <body>
      <!--=============== HEADER ===============-->
      <header class="header" id="header">
         <nav class="nav container">
            
            <a href="#"><img src="assets/images/new-egtaz-2.png" style="width: 40px; margin-top: 5px;"> </a>
               

               <div class="nav__menu" id="nav-menu">
                  <ul class="nav__list">
                     <li class="nav__item">
                           <a href="#home" class="nav__link active-link"><h2>Home</h2></a>
                     </li>
                     <li class="nav__item">
                           <a href="#about" class="nav__link"><h2>About us</h2></a>
                     </li>
                     <li class="nav__item">
                           <a href="#services" class="nav__link"><h2>Services</h2></a>
                     </li>
                     <li class="nav__item">
                           <a href="#contact" class="nav__link"><h2>Contact us</h2></a>
                     </li>

                     <i class='bx bx-toggle-left change-theme' id="theme-button"></i>
                  </ul>
               </div>

               <div class="nav__toggle" id="nav-toggle">
                  <i class='bx bx-grid-alt'></i>
               </div>

               <a href="{{route('choice')}}" class="button button__header">Login</a>
               
         </nav>
      </header>

      <!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="assets/images/icon-1.png" alt="">
         <h3>online exam</h3>
      </div>

      <div class="box">
         <img src="assets/images/icon-2.png" alt="">
         <h3>revision</h3>
      </div>

      <div class="box">
         <img src="assets/images/icon-3.png" alt="">
         <h3>E-learning</h3>
      </div>

      <div class="box">
         <img src="assets/images/icon-4.png" alt="">
         <h3>Technology</h3>
      </div>

      <div class="box">
         <img src="assets/images/icon-5.png" alt="">
         <h3>certificate</h3>
      </div>

      <div class="box">
         <img src="assets/images/icon-6.png" alt="">
         <h3>electronic correction</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="assets/images/about.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>This Project was build from scratch using HTML5, CSS3, JavaScript, Bootstrap. 
         It's complete Exam dashboard. Users can sign as Lecturer or student. 
         Each student has in his rooms exams to take it. 
         Each Lecturer is responsible on creating rooms, exams, setting roles.</p>
      <a href="{{route('team')}}" class="btn">View our Team</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="assets/images/img-1.png" alt="">
         </div>
         <div class="content">
            <h3>Online Exam</h3>
            <p>Our website   provides online exams with high quality and advanced technology</p>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Electronic correction & manual correction</h3>
            <p>It provides us with many texts, including a quick electronic correction method, showing correction of errors, as well as the manual correction process</p>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="assets/images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Creat An Exam Easly&Fast</h3>
            <p>Now, Through Our Website, You Can Put The Exam Questions In An Easy And Simple Way, As There Are Many Options Available To You.</p>
         </div>
      </div>

   </div>
</section>
<!-- home packages section ends -->

<!-- footer section starts  -->
<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="#services"> <i class="fas fa-angle-right"></i> home</a>
         <a href="#about"> <i class="fas fa-angle-right"></i> about</a>
         <a href="#package"> <i class="fas fa-angle-right"></i> package</a>
      </div>

      <div class="box">
         <h3>Our Team</h3>
         <a> <i class="fas fa-angle-right"></i> Youssef Turkey</a>
         <a> <i class="fas fa-angle-right"></i> Mohamed Amr</a>
         <a> <i class="fas fa-angle-right"></i> Mohamed Tareq</a>
         <a> <i class="fas fa-angle-right"></i> Mahmoud Adel</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="mailto: youssef.turkey11@gmail.com"> <i class="fas fa-phone"></i> youssef.turkey11@gmail.com </a>
         <a href="mailto: mohamedamro83@gmail.com"> <i class="fas fa-phone"></i> mohamedamro83@gmail.com </a>
         <a href="mailto: madotarek15@gmail.com"> <i class="fas fa-envelope"></i> madotarek15@gmail.com </a>
         <a href="mailto: mahmoud207200020@gmail.com"> <i class="fas fa-map"></i> mahmoud207200020@gmail.com </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://github.com/YoussefTurkey/Egtaz-Platform" target="_blank"> <i class="fab fa-facebook-f"></i> Github </a>
      </div>

   </div>

   <div class="credit"> created by <span>Alexandria College of Science students web designer</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->

<!-- footer section ends -->




      

      <!--=============== SCROLL UP ===============-->
      <a href="#" class="scrollup" id="scroll-up">
         <i class='bx bx-up-arrow-alt scrollup__icon'></i>
      </a>

      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
   </body>
</html>