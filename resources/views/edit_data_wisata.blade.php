<!DOCTYPE html>
<html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Edit Data Wisata</title>

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
				<div class="card-header">{{ __('Edit Data Wisata') }}</div>
 
	@foreach($data_wisata as $p)
	<form action="/data_wisata/update" method="post" enctype="multipart/form-data" >
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_wisata}}">
		<table style="margin:20px auto;">		
			<tr>
				<td>Nama Wisata</td>
				<td><input type="varchar", name="nama_wisata" required="required" value="{{ $p->nama_wisata }}" size="30" maxlength="30"></td>
            </tr>
            <tr>
				<td>Harga Wisata</td>
				<td><input type="integer" name="harga_wisata" required="required" value="{{ $p->harga_wisata }}" size="6" maxlength="6"></td>
			</tr>
			<tr>
				<td>Jadwal Wisata</td>
				<td><input type="varchar " name="jadwal_wisata" required="required" value="{{ $p->jadwal_wisata }}" size="30" maxlength="30"></td>
			</tr>
			<tr>
				<td>Informasi Wisata</td>
				<td><textarea name="informasi_wisata" required="required" value="{{ $p->informasi_wisata }}" cols="60" rows="10"></textarea></td>
			</tr>
            <tr>
			<tr>
				<td>Latitude</td>
				<td><input type="double", name="latitude"></td>
			</tr>
			<tr>
				<td>Longitude</td>
				<td><input type="double", name="longitude"></td>
			</tr>
				<td>Gambar Wisata</td>
                <td><input type="file" name="gambar_wisata" required="required" value="{{ $p->gambar_wisata }}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Edit Data"></td>
			</tr>
		</table>
	</form>
	@endforeach
		
 
</body>
</html>