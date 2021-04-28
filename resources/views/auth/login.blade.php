@extends('layouts.template_login_signup')

@section('content')
<head><title>login</title></head>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
              <form class="login100-form " method="POST" action="{{ route('login') }}">
                @csrf
                    <span class="login100-form-title p-b-26">
                        <h1>My<a href="{{route('myKitchen')}}"><span>Kitchen</span></a>
                    </h1>
                    </span>
                    <span class="login100-form-title p-b-48">
                        <i class="bi bi-person-circle"></i>
                    </span>

                    <div class="wrap-input100 validate-input" >
                        <input class="input100 @error('email') is-invalid @enderror " name="email" value="{{ old('email') }}" required  placeholder="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" >
                       <input class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" type="password" placeholder="password">
                        @error('password')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                         @enderror
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>

                    @if (Route::has('register'))
                    <div class="text-center p-t-115">
                        <span class="txt1">
                            Don’t have an account?
                        </span>
                         
                        <a class="txt2" href="{{route('register')}}">
                            {{ __('Sign up') }}
                        </a>
                    </div>
                    @endif
            </form>    
       </div>
    </div>
</div>
           

@endsection









<!--div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div-->
