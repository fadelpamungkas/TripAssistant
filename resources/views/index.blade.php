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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
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
            <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/cari" class="nav-link">Wisata</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
            <li class="nav-item"><a href=" {{url('logout')}} " class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span>{{ ucfirst(Auth()->user()->nama_depan) }}</span></a></li>
            <form id="logout-form" action=" {{url('logout')}} " method="POST">
                    @csrf
                </form>
          @else
            <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/cari" class="nav-link">Wisata</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
          @endif
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/h1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Experience the best trip ever</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/h2.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Making the most out of your holiday</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/h3.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Trip Assistant Just For You</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <div class="ftco-section-search">
      <div class="container">
        <div class="row">
          <div class="col-md-12 tabulation-search">
              
            <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="block-17">
                  <form action="/cari" method="GET" enctype="multipart/form-data" class="d-block d-lg-flex">
                    <div class="fields d-block d-lg-flex">
                      <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Search Location"></div>
                      <input type="submit" class="search-submit btn btn-primary" value="Find">  
                    </div>
                  </form>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
          <div class="img col-sm-12 col-lg-6" style="background-image: url('images/h4.jpg');">
            <a href="https://www.youtube.com/watch?v=ojQbArbuN4E" class="button popup-youtube"><span class="ion-ios-play"></span></a>
          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>Welcome to Yogyakarta.</h3>
              <p> Kota Yogyakarta (Hanacaraka:ꦏꦸꦛ​ꦔꦪꦺꦴꦒꦾꦏꦂꦠ, bahasa Jawa: Kutha Ngayogyakarta) adalah ibu kota dan pusat pemerintahan Daerah Istimewa Yogyakarta, Indonesia. Kota Yogyakarta adalah kediaman bagi Sultan Hamengkubuwana dan Adipati Paku Alam. Kota Yogyakarta merupakan salah satu kota terbesar di Indonesia dan kota terbesar kempat di wilayah Pulau Jawa bagian selatan setelah Bandung, Malang, dan Surakarta menurut jumlah penduduk. </p>

              <p>Salah satu kecamatan di Yogyakarta, yaitu Kotagede pernah menjadi pusat Kesultanan Mataram antara kurun tahun 1575–1640. Keraton (Istana) yang masih berfungsi dalam arti yang sesungguhnya adalah Keraton Ngayogyakarta dan Puro Paku Alaman, yang merupakan pecahan dari Kesultanan Mataram. Pada masa revolusi, Yogyakarta juga pernah menjadi ibu kota Indonesia antara tahun 1946 hingga 1950.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 promo ftco-animate">
            <a href="#" class="promo-img mb-4" style="background-image: url(images/airterjun.jpg);"></a>
            <div class="text text-center">
              <h2>Wisata Air</h2>
              <h3 class="price"><span>from</span> Rp 20.000</h3>
              <a href="#" class="read">Read more</a>
            </div>
          </div>
          <div class="col-lg-3 promo ftco-animate">
            <a href="#" class="promo-img mb-4" style="background-image: url(images/promo-2.jpg);"></a>
            <div class="text text-center">
              <h2>Wisata Pantai</h2>
              <h3 class="price"><span>from</span> Rp 10.000</h3>
              <a href="#" class="read">Read more</a>
            </div>
          </div>
          <div class="col-lg-3 promo ftco-animate">
            <a href="#" class="promo-img mb-4" style="background-image: url(images/promo-3.jpg);"></a>
            <div class="text text-center">
              <h2>Wisata Gunung</h2>
              <h3 class="price"><span>from</span> Rp 8.000</h3>
              <a href="#" class="read">Read more</a>
            </div>
          </div>
          <div class="col-lg-3 promo ftco-animate">
            <a href="#" class="promo-img mb-4" style="background-image: url(images/bg_2.jpg);"></a>
            <div class="text text-center">
              <h2>Wisata Lainnya</h2>
              <h3 class="price"><span>from</span> Rp15.000</h3>
              <a href="#" class="read">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>That You Do</h2>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-web"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Membuka TripAssistant</h3>
                <h2>1</h2>
              </div>
            </div>      
          </div>  
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-find"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Mencari Wisata</h3>
                <h2>2</h2>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-ticket"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Membeli Tiket Wisata</h3>
                <h2>3</h2>
              </div>
            </div>    
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-traveler-with-a-suitcase"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">Pergi ke Wisata</h3>
                <h2>4</h2>
              </div>
            </div>      
          </div>
        </div>
      </div>
      </div>
    </section>

    
    <section class="ftco-section">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center mb-5 pb-5 ftco-animate">
          <div class="col-md-7 text-center heading-section">
            <h2>Most Popular Destination</h2>
          </div>
        </div>
        <div class="row no-gutters">
      @foreach($data_wisata as $p)
          <div class="col-md-6 col-lg-3 ftco-animate">
            <a href="/wisata/{{$p->nama_wisata}}" class="block-5" style="background-image: url('<?=$p->gambar_wisata?>');">
              <div class="text">
                <span class="price">Rp <?= $p->harga_wisata  ?> </span>
                <h3 class="heading"> <?= $p->nama_wisata ?> </h3>
                <div class="post-meta">
                  <p> <?= $p->rating_wisata ?> <span class="fa fa-star checked"></span></p>
                </div>
                <p></span> <span> <?= $p->review_wisata ?> Review</span></p>
              </div>
            </a>
          </div>
      @endforeach
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
                @foreach($data_wisata as $p)
                <li><a href="/wisata/<?=$p->nama_wisata?>" class="py-2 d-block"> <?=$p->nama_wisata?> </a></li>
                @endforeach
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