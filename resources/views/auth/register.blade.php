@extends('layouts.template_login_signup')

@section('content')
<head><title>signup</title></head>
      <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100" style="width: 800px;">

               <form class="" method="POST" action="{{ route('register') }}">
                 
                 @csrf

                    <span class="login100-form-title p-b-26">
                        <a href="{{route('myKitchen.visiteur')}}"><b style="color: black;">My</b><span> Kitchen</span></a>
                    </h1>
                    </span>
                    <span class="login100-form-title p-b-48">
                        <i class="bi bi-person-circle"></i>
                    </span>
                    <div class="row">
                        <div class="wrap-input100  col-md-5 form-group" >
                            <input id="firstName" class="input100  @error('firstName') is-invalid @enderror" type="text"  name="firstName" value="{{ old('firstName') }}" placeholder="first name">
                            
                            @error('firstName')
                               <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                               </span>
                            @enderror
                             
                        </div>
                        <!-- <div class="col-md-2 form-group">

                        </div> -->
                        <div class="wrap-input100  col-md-5 form-group offset-2">
                            <input id="lastName" class="input100 @error('lastName') is-invalid @enderror" type="text" name="lastName" value="{{ old('lastName') }}" placeholder="last name">
                             
                            @error('lastName') 
                               <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                               </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="wrap-input100  col-md-5 form-group" >
                            <input id="Date" class="input100 @error('Date') is-invalid @enderror" type="date" name="Date" value="{{ old('Date') }}" placeholder="date">
                            
                            @error('Date')
                               <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                               </span>
                            @enderror
                        </div>
                        <div class="wrap-input100  col-md-5 form-group offset-md-2 "> 
                          <input id="codePostal" class="input100 @error('codePostal') is-invalid  @enderror" type="numero" name="codePostal" value="{{ old('codePostal') }}" placeholder="code postal">

                          @error('codePostal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="wrap-input100  col-md-5 form-group ">
                            <input id="num" class="input100 @error('num') is-invalid @enderror" type="numero" name="num" value="{{ old('num') }}" placeholder="numero_Telephone">
                            
                            @error('num')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div id="email" class="wrap-input100  col-md-5 form-group offset-2 " >
                            <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="email" >
                            
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="wrap-input100  col-md-12 form-group "> 
                          <input id="adresse" class="input100 @error('adresse') is-invalid  @enderror" type="text" name="adresse" value="{{ old('adresse') }}" placeholder="adresse home">

                          @error('adresse')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="wrap-input100  col-md-5 form-group "> 
                          <input id="password" class="input100 @error('password') is-invalid  @enderror" type="password" name="password" placeholder="password">
                             
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="wrap-input100  col-md-5 form-group offset-md-2 " >
                            <input id="password_confirm" class="input100 " type="password" name="password_confirmation" placeholder="password_confirmation">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="wrap-input100 col-md-6 form-group offset-md-3" >
                            <select id="compte" class="custom-select w-100 p-0 border-0 @error('compte') is-invalid @enderror" name="compte" value="{{ old('compte') }}">
                                <option value="" selected hidden="hidden">Create as much as</option>
                                <option value="1" {{old('compte') == 1 ? 'selected' : '' }}>Cooker</option>
                            </select>

                            @error('compte')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                    <div class="container-login100-form-btn my-2 ">
                        <div class="wrap-login100-form-btn "  style="margin-top: 35px;">
                            <div class="login100-form-bgbtn "></div>
                            <button class="login100-form-btn ">
                                create account
                            </button>
                        </div>
                    </div>
                    <div class="text-center p-t-80 ">
                        <span class="txt1 ">
                            already a member !
                        </span>

                        <a class="txt2 " href="{{route('login')}}">
                            login
                        </a>
                    </div>
            </form>  
            
            </div>
        </div>
    </div>      
            


@endsection






















