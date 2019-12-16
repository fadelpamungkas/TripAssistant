<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataWisataController extends Controller
{

	public function buy($nama)
	{
    	$data_wisata = DB::table('data_wisata')->where('nama_wisata',$nama)->get();
		$users = DB::table('users')->get();
		return view('buy_ticket',['data_wisata' => $data_wisata, 'users' => $users]);
	}

	
	public function wisata($nama)
    {
    	$data_wisata = DB::table('data_wisata')->where('nama_wisata',$nama)->get();
		$users = DB::table('users')->get();
		foreach($data_wisata as $p){
			$comment = DB::table('comment')->where('id_wisata','=',$p->id_wisata)->get();
		}
    	return view('wisata',['data_wisata' => $data_wisata, 'users' => $users, 'comment' => $comment]);
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
		$users = DB::table('users')->get();
    	return view('tampilan_data_wisata_admin',['data_wisata' => $data_wisata, 'users' => $users]);
	}

    public function tambah()
    {
		return view('tambah_data_wisata');
	}
	
	public function comment(Request $request)
    {
		$data_wisata = DB::table('data_wisata')->where('nama_wisata',$request->nama_wisata)->get();
		DB::table('comment')->insert([
			'id_wisata' => $request->id_wisata,
			'nama_user' => $request->nama_user,
			'rating_comment' => $request->rating_comment,
			'nama_comment' => $request->nama_comment
		]);
		DB::table('comment')->where('id_wisata','=',$request->id_wisata)->get();
		return back();
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
				'informasi_wisata' => $request->informasi_wisata,
				'gambar_wisata' => '/images/'.$file->getClientOriginalName(),
				'latitude' => '-7.790121',
				'longitude' => '110.369417'
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
