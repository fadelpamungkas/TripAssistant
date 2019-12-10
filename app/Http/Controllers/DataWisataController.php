<?php

namespace App\Http\Controllers;


use App\GambarWisata;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataWisataController extends Controller
{
    public function index()
    {
    	$data_wisata = DB::table('data_wisata')->get();
 
    	return view('index',['data_wisata' => $data_wisata]);
	}

	public function tampilan_data()
    {
    	$data_wisata = DB::table('data_wisata')->get();
 
    	return view('tampilan_data_wisata_admin',['data_wisata' => $data_wisata]);
	}
	
	public function wisata($id)
    {
    	$data_wisata = DB::table('data_wisata')->where('id_wisata',$id)->get();
 
    	return view('wisata',['data_wisata' => $data_wisata]);
    }

    public function tambah()
    {
	return view('tambah_data_wisata');
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

}
