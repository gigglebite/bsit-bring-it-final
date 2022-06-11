@extends('layouts.app')

@section('content')
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<div class="container justify-content-center" id="content">
  <div class="row justify-content-center">
    <div class="col" id="colone">
    </div>
    <div class="col" id="coltwo">
    <h1 id="welcome" > Join our service! </h1>
    <div class="row justify-content-center" id="margin1">
    <form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
     @enderror
    </div>

    <div class="form-group">
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>

    <div class="form-group">
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>       
    
    <div class="form-group">
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    
    <div class="row justify-content-center" id="margin2">
    <div class="col-6 col-md-4">
    <button type="submit" id="login">{{ __('Register') }}</button>
    </div>
    <div class="col-12 col-md-8 mt-2">
    <a href="/login" class="linkone"> Already have an account? </a>
    </div>
</div>
<style>
#btn {
  height: 40px;
  width: 40px;
  border-radius: 50%;
  border: 1px solid red;
  
}


#margin1 {
    margin-top: 35px;

    

}



#margin2 {
    margin-top: 35px;
    margin-left: 10%;

}

html{
    background-color:white;
}

#login {
    margin-left: 20px;
    border-radius: 40px;
    background-color: #008036;
    color: white;
    width: 145px;
    height: 40px;
}

#content {
    margin-top: 20px;
}

#welcome {
    font-size: 65px;
    margin-left: 5%;
}


#colone {
    background-image: url("/images/register_vector.png");
    background-size: 540px 540px;
    background-repeat: no-repeat;
    height: 500px; 
    margin-left: 5%;

}

#coltwo {
    font-family: 'Product Sans';
  font-style: bold;
  font-weight: 500;
  src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/productsans/v5/HYvgU2fE2nRJvZ5JFAumwegdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
margin-top:60px;

}

#email, #password, #name, #password-confirm {
    width:400px;
    margin-left: 10%;
    margin-top: 10px;
}

.linkone {
    color: grey;
    text-decoration: none;
    margin-left: 15px;
}

.linktwo {

    color: #008036;
    font-weight: 550;
    text-decoration: none;

}

a:hover{
    text-decoration: none;
    color: #eeb669;
}

#email, #password, #name, #password-confirm, select.form-control {
    background: transparent;
  border: none;
  border-bottom: 1px solid #000000;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-radius: 0;
}

#email, #password, 
select.form-control:focus {
  -webkit-box-shadow: none;
  box-shadow: none;
}

#marginlogin {
margin-top:30px;
margin-left: 10%;
}




}
</style>
@endsection
