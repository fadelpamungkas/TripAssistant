<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{ 
	public function tampilan_data()
    {
        $data_wisata = DB::table('data_wisata')->get();
		$users = DB::table('users')->get();
    	return view('profile',['users' => $users, 'data_wisata' => $data_wisata]);
	}

	public function update(Request $request){
		// if ($request->hasFile('gambar_wisata')){

		// 	$file = $request->file('gambar_wisata');
		// 	$nama_file = $file->getClientOriginalName();
		// 	$file->move('images',$nama_file);
			
			DB::table('users')->where('id_user',$request->id)->update([
				'nama_depan' => $request->nama_depan,
				'nama_belakang' => $request->nama_belakang,
				'email' => $request->email,
				'password' => $request->password,
				// 'gambar_wisata' => '/images/'.$file->getClientOriginalName()
			]);
		// }

		return redirect('/profile');
    }

    public function edit($id)
    {
	$data_wisata = DB::table('data_wisata')->get();
	$users = DB::table('users')->where('id_user',$id)->get();
	return view('edit_profile',['users' => $users, 'data_wisata' => $data_wisata]);
    }
}
