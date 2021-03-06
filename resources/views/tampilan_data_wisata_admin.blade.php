<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Data Wisata</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<br>
<br>
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
				<div class="card-header">{{ __('Data Wisata') }}</div>
						<div><a href="/data_wisata/tambah">+ Data Wisata</a>
						<div><a href=" {{url('logout')}} " class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span>Logout</span></a></li>
           				 <form id="logout-form" action=" {{url('logout')}} " method="POST">
                    		@csrf
           				 </form>
						</div>
						<form action="/data_wisata" method="GET" enctype="multipart/form-data" class="d-block d-lg-flex">
                			<div class="fields d-block d-lg-flex">
                  				<div class="textfield-search one-third"><input type="text" name="cari" class="form-control" placeholder="Search Location"></div>
                    				<input type="submit" class="search-submit btn btn-primary" value="Find">  
                			</div>
              			</form>
						</div>
	<table border = "1">
		<tr width>
			<th>Id Wisata</th>
			<th>Nama Wisata</th>
			<th>Harga Wisata</th>
			<th>Jadwal Wisata</th>
			<th>Rating Wisata</th>
			<th>Review Wisata</th>
			<th>Informasi Wisata</th>
			<th>Gambar Wisata</th>
			<th>Pilihan</th>
		</tr>
		@foreach($data_wisata as $p)
		<tr>
			<td>{{ $p->id_wisata }}</td>
			<td>{{ $p->nama_wisata }}</td>
			<td>{{ $p->harga_wisata }}</td>
			<td>{{ $p->jadwal_wisata }}</td>
			<td>{{ $p->rating_wisata }}</td>
			<td>{{ $p->review_wisata }}</td>
			<td>{{ $p->informasi_wisata }}</td>
			<td>{{ $p->gambar_wisata }}</td>
			<td><a href="/data_wisata/edit/{{ $p->id_wisata }}">Edit</a>
				|
				<a href="/data_wisata/hapus/{{ $p->id_wisata }}">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
			</div>
		</div>
	</div>
	</div>
</body>
</html>

