<!doctype html>
<html lang="en">

<head>
  <title>FTL</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <base href="{{url('/')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"/>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- CSS File -->
  <link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}">
  <!-- libs Files -->
  <link rel="stylesheet" href="{{asset('dashboard/css/libs/animate.css')}}">
  <link rel="stylesheet" href="{{asset('dashboard/css/libs/hover-min.css')}}">

    <link rel="stylesheet" href="{{asset('dashboard/plugin/datetimebootstrap/bootstrap-material-datetimepicker.css')}}" />


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
     <script src="{{asset('dashboard/plugin/datetimebootstrap/moment.min.js')}}"></script>
    <script src="{{asset('dashboard/plugin/datetimebootstrap/bootstrap-material-datetimepicker.js')}}"></script></script>
  <style>
    @font-face {
      font-family: menufont;
      src: url({{asset('dashboard/fonts/Montserrat-SemiBold.ttf')}});
    }

    @font-face {
      font-family: boldfont;
      src: url({{asset('dashboard/fonts/Montserrat-Bold.ttf')}});
    }


    @font-face {
      font-family: sliderfont;
      src: url({{asset('dashboard/fonts/Lora-Regular.ttf')}});
    }

    @font-face {
      font-family: sliderfontp;
      src: url({{asset('dashboard/fonts/Montserrat-Light.ttf')}});
    }

    .nav-item {
      font-family: menufont;
      font-size: 16px;
    }

    .secondmenu {

      font-family: boldfont;
      font-size: 18px;
      font-stretch: normal;
      font-style: normal;
      line-height: 2.3;
      letter-spacing: normal;
      text-align: left;
      color: #ffffff;

    }

    .slider {
      font-family: sliderfont;
      font-weight: unset !important;
    }

    .sliderp {
      font-family: sliderfontp;
      font-size: 16px;
    }

    .search {
      font-family: boldfont;

    }
  </style>
</head>

<body>
@if( ! in_array(request()->segment(1) ,['login','register','chooseLogin' ]))

  <header class="TopHeader">
  
    
  
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand ml-5" href="{{route('index')}}"><img src="{{asset('dashboard/images/logo.png')}}"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
        <i class="fas fa-bars text-white"></i>
        </span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
  
          <li class="nav-item">
            <a class="nav-link " href="{{asset('request.html')}}"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white hvr-underline-from-center
          " href="{{route('about')}}">ABOUT<span class="sr-only"></span></a>
          </li>
  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white hvr-underline-from-center"  id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              SERVICES
            </a>
  
            <style>
              .dropdown-item:hover {
                background-color: unset;
              }
            </style>
            <div style="background-color:#00376e" class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-white" href="{{url('Category')}}">Marketplace</a>
              <a class="dropdown-item  text-white" href="{{route('lcl')}} ">LCL</a>
              <a class="dropdown-item  text-white" href="{{route('fcl')}}">FCL</a>
              <a class="dropdown-item  text-white" href="{{route('bulk')}}">Bulk</a><a class="dropdown-item  text-white" href="{{url('/tender/index')}}">Tender Requests</a>
              <a class="dropdown-item  text-white" href="{{route('booking_result')}} ">Booking</a>
              <a class="dropdown-item  text-white" href="{{route('request')}}">Requests</a>
              <a class="dropdown-item  text-white" href="{{asset('tracking')}}">Tracking</a>
              <a class="dropdown-item  text-white" href="{{route('tutorials')}}">Tutorials</a>
              <a class="dropdown-item  text-white" href="{{route('allShippment')}}">all Shippment</a>


  
            </div>
          </li>
  
          <li class="nav-item">
            <a class="nav-link text-white hvr-underline-from-center" href="{{route('reference')}} ">REFERENCES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white hvr-underline-from-center" href="#">MANAGE</a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link text-white hvr-underline-from-center" href="{{route('contact')}} ">CONTACT</a>
          </li>
  
        </ul>
  
        <ul style="list-style-type: none;" class="my-2 my-lg-0 ml-auto d-flex">
             <li class="nav-item">
                        <a href="{{route('cart.show')}}" class="nav-link text-white">
                            <span class="fas fa-shopping-cart">
                                ( {{ session()->has('cart') ? session()->get('cart')->totalQty : '0' }} )
                            </span>
                        </a>
            </li>
            @if(! isset(auth()->guard('client_web')->user()->id) )
          <li class="nav-item">
            <a style="border:solid" class="nav-link text-white" href="{{url('login')}}">LOGIN/SIGNUP</a>
          </li>
          @else
   <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{auth()->guard('client_web')->user()->name}}
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu">
        <a href="{{route('client.logout')}}"><button class="dropdown-item" type="button">Logout</button></a>
      </div>
    </div>
          @endif
        </ul>
  
      </div>
    </nav>
  
    <div style="background-color: #ffdb27;"" class="col-md-12 no-padding">
      <div class="d-inline" style="padding: 15px 10px;background-color: #052b4c;">
        <div class="m-5 d-inline secondmenu">Special offer</div>
      </div>
<div class="Marquee">
                <div class="MarqueeAnimate">

                    <div class="Line">
                        <img class="d-inline" src="{{asset('dashboard/images/china.png')}}"><span class="text-white m-2">china</span>

                        <img class="d-inline" src="{{asset('dashboard/images/united-states.png')}}"><span class="text-white m-2">USA</span><span class="text-white m-2 bold">20 USD</span>
                    </div>
                    <div class="Line">
                        <img class="d-inline" src="{{asset('dashboard/images/china.png')}}"><span class="text-white m-2">china</span>

                        <img class="d-inline" src="{{asset('dashboard/images/united-states.png')}}"><span class="text-white m-2">USA</span><span class="text-white m-2 bold">20 USD</span>
                    </div>
                    <div class="Line">
                        <img class="d-inline" src="{{asset('dashboard/images/china.png')}}"><span class="text-white m-2">china</span>

                        <img class="d-inline" src="{{asset('dashboard/images/united-states.png')}}"><span class="text-white m-2">USA</span><span class="text-white m-2 bold">20 USD</span>
                    </div>
                    <div class="Line">
                        <img class="d-inline" src="{{asset('dashboard/images/china.png')}}"><span class="text-white m-2">china</span>

                        <img class="d-inline" src="{{asset('dashboard/images/united-states.png')}}"><span class="text-white m-2">USA</span><span class="text-white m-2 bold">20 USD</span>
                    </div>
                    <div class="Line">
                        <img class="d-inline" src="{{asset('dashboard/images/china.png')}}"><span class="text-white m-2">china</span>

                        <img class="d-inline" src="{{asset('dashboard/images/united-states.png')}}"><span class="text-white m-2">USA</span><span class="text-white m-2 bold">20 USD</span>
                    </div>
                    <div class="Line">
                        <img class="d-inline" src="{{asset('dashboard/images/china.png')}}"><span class="text-white m-2">china</span>

                        <img class="d-inline" src="{{asset('dashboard/images/united-states.png')}}"><span class="text-white m-2">USA</span><span class="text-white m-2 bold">20 USD</span>

                    </div>
                </div>


            </div>
  
    </div>
  </header>
 @endif
