<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TripAssistant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="/">TripAssistant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
          @if(Auth::check())
            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/cari" class="nav-link">Wisata</a></li>
            <li class="nav-item active"><a href="/about" class="nav-link">About</a></li>
            <li class="nav-item"><a href=" {{url('logout')}} " class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span>{{ ucfirst(Auth()->user()->nama_depan) }}</span></a></li>
            <form id="logout-form" action=" {{url('logout')}} " method="POST">
                    @csrf
                </form>
          @else
            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/cari" class="nav-link">Wisata</a></li>
            <li class="nav-item active"><a href="/about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
          @endif
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/tugu_jogja.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Tentang kami</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
          <div class="img col-sm-12 col-lg-6" style="background-image: url('images/pantai.jpg');"></div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>Selamat Datang di TripAssistant. Kami Berdiri Sejak Tadi Pagi.</h3>
              <p>Tim TripAssistant terdiri dari empat orang, yaitu Adi Setiawan, Billy Indra Irawan, Fadel Pamungkas, dan R. Herdjuno Pawenang K. </p>

              <p>Tujuan TripAssistant ini diciptakan tidak lain tidak bukan adalah untuk memenuhi tugas dari Dosen PABW kami.</p>

              <p>Yaudah slur, mungkin segitu aja tentang kami. Makasih.</p>
            </div>
          </div>
          <div class="img col-sm-12 col-lg-6" style="background-image: url('images/pantai.jpg');"></div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-4 pb-4">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Our TripAssistant Team says</h2>
          </div>
        </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-4">
                <div class="user-img mb-4" style="background-image: url(images/2.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  
                <p>Cape slur nubes</p>
                  <p class="name">Adi</p>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-4">
                <div class="user-img mb-4" style="background-image: url(images/1.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="mb-5">Semoga nilainya bagus. aamiin. </p>
                  <p class="name">Djuno</p>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-3">
                <div class="user-img mb-4" style="background-image: url(images/3.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="mb-5">Pagi, siang, sore, malam mikirin tubes terooooosssssssss </p>
                  <p class="name">Billy</p>
                </div>
              </div>
            </div>
            <div class="item text-center">
              <div class="testimony-wrap p-4 pb-4">
                <div class="user-img mb-4" style="background-image: url(images/4.jpg)" style="border: 1px solid red;"></div>
                <div class="text">
                  <p class="mb-5">Jadi gabisa bucin :( </p>
                  <p class="name">Fadel</p>
                </div>
              </div>
            </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">TripAssistant</h2>
              <p>Make your Trip easier with us.</p>
            </div>
          </div>

          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Popular Destination</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Candi Borobudur</a></li>
                <li><a href="#" class="py-2 d-block">Candi Prambanan</a></li>
                <li><a href="#" class="py-2 d-block">Gunung Merapi</a></li>
                <li><a href="#" class="py-2 d-block">Pantai Parangtritis</a></li>
                <li><a href="#" class="py-2 d-block">Pantai Kresengan</a></li>
                <li><a href="#" class="py-2 d-block">Bunker Kaliadem</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Jalan Kaliurang km 14,5</a></li>
                <li><a href="#" class="py-2 d-block">+628000111222</a></li>
                <li><a href="#" class="py-2 d-block">TripAssistantinfo.com</a></li>
                <li><a href="#" class="py-2 d-block">TripAssistant@gmail.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>