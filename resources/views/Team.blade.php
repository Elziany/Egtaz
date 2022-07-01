<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- ===== Link Swiper's CSS ===== -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- ===== Fontawesome CDN Link ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
        
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{asset('css/team.css')}}">

    
    <title>Our Team - About Us</title>

    <link rel="icon" href="../assets/images/new-egtaz-2.png">
</head>
<body>


  <section>

    <div class="swiper mySwiper container">
      <div class="swiper-wrapper content">

        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="{{asset('images/mohamed amr.jpg')}}" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>

            <div class="name-profession">
              <span class="name">Mohamed Amro</span>
              <span class="profession"> front-end Developer</span>
              <span class="info">Student in the fourth year of Alexandria University, Faculty of Science, Department of Computer Science/Statistics</span>
            </div>

            

           
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="{{asset('images/mohamed tarek.jpg')}}" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>

            <div class="name-profession">
              <span class="name">Mohamed Tarek</span>
              <span class="profession">Ui/Ux Developer </span>
              <span class="info">Student in the fourth year of Alexandria University, Faculty of Science, Department of Computer Science/Statistics</span>

            </div>

                     </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="{{asset('images/adel.jpg')}}" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>

            <div class="name-profession">
              <span class="name">Mahmoud Adel</span>
              <span class="profession">Back-end Developer</span>
              <span class="info">Student in the fourth year of Alexandria University, Faculty of Science, Department of Computer Science/Statistics</span>

            </div>

         

            
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="{{asset('images/trky.jpg')}}" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>

            <div class="name-profession">
              <span class="name">Yousef El Turky</span>
              <span class="profession">Front-end Developer</span>
              <span class="info">Student in the fourth year of Alexandria University, Faculty of Science, Department of Computer Science/Statistics</span>

            </div>

           

            
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="{{asset('images/mohamed amr.jpg')}}" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>

            <div class="name-profession">
              <span class="name">Mohamed Amro</span>
              <span class="profession">front-end Developer</span>
              <span class="info">Student in the fourth year of Alexandria University, Faculty of Science, Department of Computer Science/Statistics</span>

            </div>

          

           
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="{{asset('images/mohamed tarek.jpg')}}" alt="">
            </div>

            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div>

            <div class="name-profession">
              <span class="name">Mohamed Tarek</span>
              <span class="profession">Ui/Ux Developer</span>
              <span class="info">Student in the fourth year of Alexandria University, Faculty of Science, Department of Computer Science/Statistics</span>

            </div>

           

          </div>
        </div>

        </div>

        </div>


        
        
        
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </section>
    
    
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  
    <script src="{{asset('js/team.js')}}"></script>

</body>
</html>