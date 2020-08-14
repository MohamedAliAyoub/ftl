@extends('layouts.dashboard.app')
@section('content')
<body style="background-image: url(dashboard/images/main.png)">
 

  <div class="width70 h-100 SignPre">
    <div class="row  h-100 justify-content-center align-items-center m-auto">
         
        <div class="col-md-12 text-center ImgLogo">
            <img src="{{ asset('dashboard/images/logo.png') }}">
         </div>
     
        <h3 class="m-3 text-white text-center">Choose Your Account</h3>

        <div class="row m-0 text-white text-center PreLogin">

            <div class="col-md-4">
                <div class="Sec">
                    <a href="registrationAdvance.html">
                        <div class="ImgContainer">
                            <img src="{{asset('dashboard/images/cargo-ship.png ')}}">
                        </div>
                        <h5>Client</h5>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="Sec">
                    <a href="registrationAdvance.html">
                        <div class="ImgContainer">
                            <img src="{{asset('dashboard/images/international.png ')}}">
                        </div>
                        <h5>Subcostructor</h5>
                        </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="Sec">
                    <a href="registration.html">
                        <div class="ImgContainer">
                            <img src="{{asset('dashboard/images/logistics-delivery.png ')}}">
                        </div>
                        <h5>Provider</h5>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection