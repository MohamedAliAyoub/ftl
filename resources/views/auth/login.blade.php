@extends('layouts.dashboard.app')
@section('content')




<body style="background-image: url(dashboard/images/main.png)">
 

  <div class="container h-100 SignForm">
    <div class="row  h-100 justify-content-center align-items-center m-auto">
         
        <div class="col-md-12 text-center mt-5 mb-3">
            <img src="{{asset('dashboard/images/logo.png')}} ">
         </div>
                    <form method="POST" action="{{ route('login') }}" class="col-md-5">
                        @csrf
                            <h3 class="m-3 text-white text-center">Login To Continue</h3>

                        <div class="form-group ">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group ">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group text-right">
                            <a class="ForgetPass" href="ForgetPassword.html"  class="text-right text-white">forget password?</a>
                        </div>
                     

                        <div class="form-group">
                                <button type="submit" class="btn btn-lg no-padding col-md-12 mb-3 SubmitBtn">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                    </form>

               <div class="col-md-12">
        <p  class="lead text-white text-center mt-3 mb-3">New User ?<a href="{{route('register')}}" >Sign Up</a></p>

          </div>
    </div>
</div>
@endsection