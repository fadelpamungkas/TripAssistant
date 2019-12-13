<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TripAssistant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700">

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
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
          <li class="nav-item"><a href="/wisata" class="nav-link">Wisata</a></li>
          <li class="nav-item"><a href=" {{url('logout')}} " class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span>{{ ucfirst(Auth()->user()->nama_depan) }}</span></a></li>
            <form id="logout-form" action=" {{url('logout')}} " method="POST">
                    @csrf
                </form>
        @else
            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/wisata" class="nav-link">Wisata</a></li>
            <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
        @endif
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
   @foreach($data_wisata as $p)
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('<?=$p->gambar_wisata?>');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3"><?= $p->nama_wisata ?></h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->
   @endforeach

   @foreach($data_wisata as $p)
    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">            
            <p>
              <img src="<?=$p->gambar_wisata?>" alt="" class="img-fluid">
            </p>
            <p>Rp <?= $p->harga_wisata ?> </p> 
            <p> <?= $p->rating_wisata ?> <span class="fa fa-star checked"></span></p>
            <p> <?= $p->review_wisata ?> Riviews </p>
            <p>Jadwal : <?= $p->jadwal_wisata ?> </p>
            <h2 class="mb-3"> <?= $p->nama_wisata ?> </h2>
            <p> <?= $p->informasi_wisata ?> </p>
            <div class="row mt-5">
              <div class="col-md-12" id="map"></div>
            </div>
    @endforeach
            
            <div class="pt-5 mt-5">
              <h3 class="mb-5">Reviews</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="/images/person_1.jpg" alt="Image placeholder">
                  </div>
                  @foreach($comment as $c)
                  <div class="comment-body">
                    <h3><?= $c->nama_user ?></h3>
                    <div class="meta">November 27, 2019 at 2:21pm</div>
                    <p><?= $c->nama_comment ?></p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                  @endforeach
                </li>
<!-- 
                <li class="comment">
                  <div class="vcard bio">
                    <img src="/images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Fadel</h3>
                    <div class="meta">Desember 12, 2019 at 2:21pm</div>
                    <p>Keren lah bisa bisa</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li> -->
              </ul>
              <!-- END comment-list -->

              @if(Auth::check())
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="/wisata/comment" method="post"class="p-5 bg-light">
                {{ csrf_field() }}
                  <div class="form-group">
                    <label for="name">Nama</label>
                    <input value="<?=Auth::user()->nama_depan?> <?=Auth::user()->nama_belakang?>" name="nama_user" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="name">Rating Wisata</label>
                    <input type="integer" id="rating_comment" name="rating_comment" size="1" maxlength="1"><span class="fa fa-star checked"></span>
                  </div>
                  <div class="form-group">
                    <label for="nama_comment">Message</label>
                    <textarea name="nama_comment" id="nama_comment" nama="nama_comment" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                  </div>
                </form>
              </div>
              @endif
            </div>
          </div>

          <div class="col-md-4 sidebar">
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Budget</h3>
                <li><a>Ticket <span>Rp. 50.000</span></a></li>
                <li><a>VIP Ticket <span>Rp. 70.000</span></a></li>
                <li><a>Food <span>Rp. 20.000 - 80.000</span></a></li>
                <li><a>Toilet <span>Rp. 2.000</span></a></li>
                <li><a>Parking <span>Rp. 10.000</span></a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <div class="form-group">
                <input type="submit" value="Buy" class="btn btn-primary py-3 px-5">
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <div class="form-group">
                <input type="submit" value="Nearby" class="btn btn-primary py-3 px-5">
              </div>
            </div>

          </div>

        </div>
      </div>
    </section> <!-- .section -->

    <!-- <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Voyage Fellow Tourist</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Book Now</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Flight</a></li>
                <li><a href="#" class="py-2 d-block">Hotels</a></li>
                <li><a href="#" class="py-2 d-block">Tour</a></li>
                <li><a href="#" class="py-2 d-block">Car Rent</a></li>
                <li><a href="#" class="py-2 d-block">Beach &amp; Resorts</a></li>
                <li><a href="#" class="py-2 d-block">Mountains</a></li>
                <li><a href="#" class="py-2 d-block">Cruises</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Top Deals</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Luxe Hotel</a></li>
                <li><a href="#" class="py-2 d-block">Venice Tours</a></li>
                <li><a href="#" class="py-2 d-block">Deluxe Hotels</a></li>
                <li><a href="#" class="py-2 d-block">Boracay Beach &amp; Resorts</a></li>
                <li><a href="#" class="py-2 d-block">Beach &amp; Resorts</a></li>
                <li><a href="#" class="py-2 d-block">Fuente Villa</a></li>
                <li><a href="#" class="py-2 d-block">Japan Tours</a></li>
                <li><a href="#" class="py-2 d-block">Philippines Tours</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">198 West 21th Street, Suite 721 New York NY 10016</a></li>
                <li><a href="#" class="py-2 d-block">+ 1235 2355 98</a></li>
                <li><a href="#" class="py-2 d-block">info@yoursite.com</a></li>
                <li><a href="#" class="py-2 d-block">email@email.com</a></li>
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
          <div class="col-md-12 text-center"> -->

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/jquery.waypoints.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/aos.js"></script>
  <script src="/js/jquery.animateNumber.min.js"></script>
  <script src="/js/bootstrap-datepicker.js"></script>
  <script src="/js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/js/google-map.js"></script>
  <script src="/js/main.js"></script>
  </body>

</html>