@extends('layouts.dashboard.app')
@section('content')
 <div class="container h-100 SignForm">
    <div class="row  h-100 justify-content-center align-items-center m-auto">
         
        <div class="col-md-12 text-center mt-5 mb-3">
            <img src="{{asset('dashboard/images/logo.png')}} ">
         </div>
                    <form method="POST" action="{{ route('register') }}" class="col-md-7">
                        @csrf

                        <div class="row m-0">
                            <div class="col-md-6 form-group padding-5">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder=" Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <div class="col-md-6 form-group padding-5">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row m-0">
                            <div class="col-md-6 form-group padding-5">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                      
                            <div class="col-md-6 form-group padding-5">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  placeholder="Comfirm password">
                            </div>
                        </div>

                        <div class="row m-0">
                            <div class="col-md-6 form-group padding-5">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required  placeholder="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                      
                            <div class="col-md-6 form-group padding-5">
                                <input  type="text" class="form-control" name="adress" required   placeholder=" address">
                                 @error('adress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <input type="hidden" name="type"  value="sub">

                       
                                <button type="submit" class="btn btn-lg  col-md-12 mb-3 SubmitBtn">
                                    {{ __('Register') }}
                                </button>
                         
                    </form>
              <div class="col-md-12">
        <p  class="lead text-white text-center mt-3 mb-3">Alredy User ?<a href="{{route('login')}} " >Sign in</a></p>

          </div>
    </div>
</div>
@endsection


