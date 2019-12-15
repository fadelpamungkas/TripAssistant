<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;
 
class SessionController extends Controller
{
 
    public function index()
    {
      $users = DB::table('users')->get();
 
    	return view('login',['users' => $users]);
    }  
 
    public function registration()
    {
        return view('registration');
    }
     
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
 
        // $users = DB::table('users')->get('admin');
        $credentials = $request->only('email', 'password');
        $email = $request->only('email');
        if (Auth::attempt($credentials)) {
            // Authentication passed...

            // $users = DB::table('users')->where('email', $email)->get();
            // $users->admin = ($request->has('admin')) ? 1 : 0;
            if(Auth::user()->admin == 1){
              return redirect()->intended('/data_wisata');
            }else{
              return redirect()->intended('/');
            }
        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
 
    public function postRegistration(Request $request)
    {  
        request()->validate([
        'nama_depan' => 'required|string|max:10',
        'nama_belakang' => 'required|string|max:10',
        'email' => 'required|email|unique:users',
        'password' => 'required|required_with:confirmation|same:confirmation|string|min:8',
        'confirmation' => 'required|min:8',
        'admin' => '0'
        ]);
         
        $data = $request->all();
 
        $check = $this->create($data);
       
        return Redirect::to("/")->withSuccess('Great! You have Successfully loggedin');
    }
 
    public function create(array $data)
    {
      return User::create([
        'nama_depan' => $data['nama_depan'],
        'nama_belakang' => $data['nama_belakang'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'admin' => '0'
      ]);
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
}