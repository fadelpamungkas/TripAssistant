<?php

namespace App\Http\Controllers;

use App\GambarWisata;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataWisataController extends Controller
{
	
	public function wisata($nama)
    {
    	$data_wisata = DB::table('data_wisata')->where('nama_wisata',$nama)->get();
		$users = DB::table('users')->get();
    	return view('wisata',['data_wisata' => $data_wisata, 'users' => $users]);
	}
	
	public function cari(Request $request)
	{
		$cari = $request->cari;
		$data_wisata = DB::table('data_wisata')->where('nama_wisata','like',"%".$cari."%")->paginate();
		return view('tampilanwisata',['data_wisata' => $data_wisata]);
 
	}

	public function tampilan_data()
    {
    	$data_wisata = DB::table('data_wisata')->get();
 
    	return view('tampilan_data_wisata_admin',['data_wisata' => $data_wisata]);
	}
    public function tambah()
    {
		$gambar = GambarWisata::get();
		return view('tambah_data_wisata',['gambar_wisata' => $gambar]);
    }


    public function store(Request $request){
		if ($request->hasFile('gambar_wisata')){

			$file = $request->file('gambar_wisata');
			$nama_file = $file->getClientOriginalName();
			$file->move('images',$nama_file);
			
			DB::table('data_wisata')->insert([
				'nama_wisata' => $request->nama_wisata,
				'harga_wisata' => $request->harga_wisata,
				'jadwal_wisata' => $request->jadwal_wisata,
				'rating_wisata' => $request->rating_wisata,
				'review_wisata' => $request->review_wisata,
				'informasi_wisata' => $request->informasi_wisata,
				'gambar_wisata' => '/images/'.$file->getClientOriginalName()
			]);

		}

		return redirect('/data_wisata');
    }

	public function update(Request $request){
		if ($request->hasFile('gambar_wisata')){

			$file = $request->file('gambar_wisata');
			$nama_file = $file->getClientOriginalName();
			$file->move('images',$nama_file);
			
			DB::table('data_wisata')->where('id_wisata',$request->id)->update([
				'nama_wisata' => $request->nama_wisata,
				'harga_wisata' => $request->harga_wisata,
				'jadwal_wisata' => $request->jadwal_wisata,
				'rating_wisata' => $request->rating_wisata,
				'review_wisata' => $request->review_wisata,
				'informasi_wisata' => $request->informasi_wisata,
				'gambar_wisata' => '/images/'.$file->getClientOriginalName()
			]);
		}

		return redirect('/data_wisata');
    }

    public function edit($id)
    {
	$data_wisata = DB::table('data_wisata')->where('id_wisata',$id)->get();
	return view('edit_data_wisata',['data_wisata' => $data_wisata]);
    }



    public function hapus($id)
    {
	DB::table('data_wisata')->where('id_wisata',$id)->delete();
	return redirect('/data_wisata');
    }


    public function upload(){
        $gambar = GambarWisata::get();
		return view('upload',['gambar_wisata' => $gambar]);
	}

 
	public function proses_upload(Request $request){
		$this->validate($request, [
			'gambar_wisata' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('gambar_wisata');
 
		    // nama file
			echo 'File Name: '.$file->getClientOriginalName();
			echo '<br>';
		 
			// ekstensi file
			echo 'File Extension: '.$file->getClientOriginalExtension();
			echo '<br>';

			// ukuran file
			echo 'File Size: '.$file->getSize();
			echo '<br>';
		 
		 
			// isi dengan nama folder tempat kemana file diupload
			$tujuan_upload = "C:\xampp\htdocs\TripAssistant\public\images";
		 
			// upload file
			$file->move($tujuan_upload,$file->getClientOriginalName());
 
		// $nama_file = time()."_".$file->getClientOriginalName();
 
      	//         isi dengan nama folder tempat kemana file diupload
		// $tujuan_upload = 'images';
		// $file->move($tujuan_upload,$nama_file);
 
		// Gambar::create([
		// 	'gambar_wisata' => $nama_file
		// ]);
 
		// return redirect()->back();
		
	}
}
