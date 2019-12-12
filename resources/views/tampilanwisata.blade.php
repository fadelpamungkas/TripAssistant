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
          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="/wisata" class="nav-link">Wisata</a></li>
          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
          <li class="nav-item"><a href=" {{url('logout')}} " class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span>Logout</span></a></li>
            <form id="logout-form" action=" {{url('logout')}} " method="POST">
                    @csrf
                </form>
        @else
            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="/wisata" class="nav-link">Wisata</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
        @endif
          </ul>
        </div>
      </div>
    </nav>

    <section class="home-slider owl-carousel">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
            </div>
          </div>
        </div>
    </section>

    <center>
    <section class="ftco-section">
	<form action="/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Wisata" value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>	
	<br/>

	<table border = "1">
		<tr>
      <th>Gambar Wisata</th>
			<th>Nama Wisata</th>
			<th>Rating Wisata</th>
			<th>Review Wisata</th>
		</tr>
		@foreach($data_wisata as $p)
		<tr>
      <td><img src="<?=$p->gambar_wisata?>"style ='width:400px;height:300px'></td>
			<td><center><a href="/wisata/{{$p->nama_wisata}}"><?=$p->nama_wisata?></center></td>
			<td><center>{{ $p->rating_wisata }} <span class="fa fa-star checked"></span></center></td>
			<td><center>{{ $p->review_wisata }}</center></td>
		</tr>
		@endforeach
	</table>
    
	<br/>
	<!-- Halaman : {{ $data_wisata->currentPage() }} <br/>
	Jumlah Data : {{ $data_wisata->total() }} <br/>
	Data Per Halaman : {{ $data_wisata->perPage() }} <br/> -->
    </section>
    </center>

	{{ $data_wisata->links() }}

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