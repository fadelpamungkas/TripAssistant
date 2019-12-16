<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--Bootsrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
 
</head>
<body>
@if(Auth::check())
  <a href="/"></a> 
@else 
<br>
<br>
<br>
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-4 mx-auto" style="background-image: url('images/tripassistant.jpg');  background-repeat: no-repeat; background-size: 400px;"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8">
              <h3 class="login-heading mb-4">Register here!</h3>
               <form action="{{url('post-registration')}}" method="POST" id="regForm">
                 {{ csrf_field() }}
                <div class="form-label-group">
                  <input type="text" id="inputNamaDepan" name="nama_depan" class="form-control" placeholder="Nama Depan" autofocus>
                  <br>
                  
                  @if ($errors->has('nama_depan'))
                  <span class="error">{{ $errors->first('nama_depan') }}</span>
                  @endif       
 
                </div> 
                <div class="form-label-group">
                  <input type="text" id="inputNamaBelakang" name="nama_belakang" class="form-control" placeholder="Nama Belakang" autofocus>
                  <br>
                  
                  @if ($errors->has('nama_belakang'))
                  <span class="error">{{ $errors->first('nama_belakang') }}</span>
                  @endif       
 
                </div> 
                <div class="form-label-group">
                  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >
                  <br>
                  
                  @if ($errors->has('email'))
                  <span class="error">{{ $errors->first('email') }}</span>
                  @endif    
                </div> 
 
                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                  <br>
                   
                  @if ($errors->has('password'))
                  <span class="error">{{ $errors->first('password') }}</span>
                  @endif  
                </div>

                <div class="form-label-group">
                  <input type="password" name="confirmation" id="inputConfirmation" class="form-control" placeholder="Confirmation Password">
                  <br>  
                </div>

                <div class="form-label-group">
                <td><input type="radio" name="jenis_kelamin" value="Pria" checked>Pria
                <input type="radio" name="jenis_kelamin" value="Wanita">Wanita
 
                <button class="btn btn-lg btn-primary btn-block btn-login text-upper  case font-weight-bold mb-2" type="submit">Sign Up</button>
                <div class="text-center">If you have an account?
                  <a class="small" href="{{url('login')}}">Sign In</a></div>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endif
</body>
</html>