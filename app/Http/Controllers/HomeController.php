<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
    	$data_wisata = DB::table('data_wisata')->get();
		$users = DB::table('users')->get();
    	return view('index',['data_wisata' => $data_wisata, 'users' => $users]);
    }
    
    public function about()
    {
    	$data_wisata = DB::table('data_wisata')->get();
		$users = DB::table('users')->get();
    	return view('about',['data_wisata' => $data_wisata, 'users' => $users]);
	}
}
