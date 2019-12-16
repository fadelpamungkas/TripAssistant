<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TripAssistant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
    <?=
            // Set your Merchant Server Keyx
        \Midtrans\Config::$serverKey = 'SB-Mid-server-I7CMfpDew3b1hY4QcqR5nj6r';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        $params = array(
          'transaction_details' => array(
              'order_id' => rand(),
              'gross_amount' => $transaksi->harga_wisata,
          )
      );
      
      $snapToken = \Midtrans\Snap::getSnapToken($params);
     ?>
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
          <li class="nav-item"><a href="/profile" class="nav-link">Profile</a></li>
          <li class="nav-item"><a href=" {{url('logout')}} " class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span>{{ ucfirst(Auth()->user()->nama_depan) }}</span></a></li>
            <form id="logout-form" action=" {{url('logout')}} " method="POST">
                    @csrf
                </form>
        @else
            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/cari" class="nav-link">Wisata</a></li>
            <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
        @endif
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Purchase Ticket</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9 mb-4">
          <div class="col-md-6 pr-md-5 flex-column">
            <div class="row d-block flex-row">
            @foreach($users as $u)
            @if((Auth()->user()->email)==$u->email)
              <h2 class="h4 mb-4">Account Detail</h2>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0">Nama : {{ $u->nama_depan }} {{ $u->nama_belakang }}</p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0">Email : {{ $u->email }}</p>
                </div>
              </div>
              @endif
              @endforeach
            </div>
          </div>

          <div class="col-md-6">
            <form action="/wisata/{nama}/buy">
                <h2 class="h4 mb-4">Buy Detail</h2>
                <div class="col mb-3 d-flex py-4 border" style="background: white;">
                  <div class="align-self-center">
                    <p class="mb-0"><span>Wisata:</span> <?=$transaksi->nama_wisata?></p>
                  </div>
                </div>
                <div class="col mb-3 d-flex py-4 border" style="background: white;">
                  <div class="align-self-center">
                    <p class="mb-0"><span>Tanggal:</span> <?=$transaksi->tanggal_tiket?></p>
                  </div>
                </div>
                <div class="col mb-3 d-flex py-4 border" style="background: white;">
                  <div class="align-self-center">
                    <p class="mb-0"><span>Jumlah Tiket:</span> <?=$transaksi->jumlah_tiket?></p>
                  </div>
                </div>
                <div class="col mb-3 d-flex py-4 border" style="background: white;">
                  <div class="align-self-center">
                    <p class="mb-0"><span>Total Harga:</span> <?=$transaksi->harga_wisata?></p>
                  </div>
                </div>
                
            </form>
            <div class="form-group">
                <button id="pay-button" type="submit" class="btn btn-success py-3 px-5">Buy</button>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12" id="map"></div>
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
                @foreach($data_wisata as $p)
                <li><a href="/wisata/{{$p->nama_wisata}}" class="py-2 d-block"> <?=$p->nama_wisata?> </a></li>
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
  <script src="/js/google-map.js"></script>
  <script src="/js/main.js"></script>
  <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-QSM7g2km1Jr_S0Vz"></script>
    <script type="text/javascript">
      document.getElementById('pay-button').onclick = function(){
        // SnapToken acquired from previous step
        snap.pay('<?=$snapToken?>', {
          // Optional
          onSuccess: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          // Optional
          onPending: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          // Optional
          onError: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          }
        });
      };
    </script>

  </body>
</html>