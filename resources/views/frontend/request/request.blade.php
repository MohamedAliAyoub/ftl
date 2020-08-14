@extends('layouts.dashboard.app')
@section('content')
<div style="background-image: url(dashboard/images/header.png);background-size: 100% auto;background-position: center;background-repeat: no-repeat;" class="col-md-12">
<h1 class="text-white text-center p-5 wow fadeInUp" style="font-family: sliderfont; font-size: 40px;" data-wow-duration="2s">Requests</h1>
</div>

  <body style="background-image: url(dashboard/images/main.png);">

    <div class="container">
        <div class="row">
            
            
            <div id="serv1" class="col-md-4 text-center mt-5">

              <div style="background-color: #00376e;" class="col-md-11 p-3">
<a href="request-less.php" style="text-decoration: none;">
              <img class="mb-4" style="width:70px; height:44px;"
               src="{{asset('dashboard/images/request-lcl.png')}}">
              <h3 style="font-size: 14px;" class="text-white text-center">LESS CONTAINER LOAD</h3>
              <p style="font-size: 12px;display: none;" class="lead text-white" id="serv1p">Submit a form for cargo volume from 1 cubic meter
                and up to 20m³ . LCL shipment is the most
                economical way to ship small cargo.</p></a>
            </div></div>

            <div id="serv2" class="col-md-4 text-center mt-5">
              <div style="background-color: #00376e;" class="col-md-11 p-3">
<a href="request-full.php" style="text-decoration: none;">
              <img class="mb-4" style="width:70px; height:44px;" src="{{asset('dashboard/images/request-fcl.png')}}">
              <h3 style="font-size: 14px;" class="text-white text-center">FULL CONTAINER LOAD</h3>
              <p style="font-size: 12px;display: none;" class="lead text-white" id="serv2p">Transportation in ocean containers (FCL). Whole
                container is intended for one consignee. Submit rate 
                request form for one type of container.</p>
                </a>
            </div>
            </div>
            
          
            <div id="serv3" class="col-md-4 text-center mt-5">
              <div style="background-color: #00376e;" class="col-md-11 p-3">
<a href="request-bulk.php" style="text-decoration: none;">
              <img class="mb-4" style="width:70px; height:44px;" src="{{asset('dashboard/images/request-bulk.png')}}">
              <h3 style="font-size: 14px;" class="text-white text-center">IN BULK</h3>
              <p style="font-size: 12px;display: none;" class="lead text-white" id="serv3p">TBreak bulk cargo, Bulk Cargoes, Project cargo and
                Heavy lift, military equipment or almost any other
                oversized or overweight cargo.</p>
                </a>
            </div>
            </div>
           

           
           <div class="col-md-12 mt-5">
                <center>
                    <a href="{{route('request.request_quote')}}" style="background-color: #314aef;" class="hvr-float-shadow btn btn-lg text-white pl-5 pr-5 mt-5">See all shipping leads</a>
                </center>
              </div>
             
         


        </div>
    </div>



 @endsection
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
          $("#serv1").hover(function(){
            $("#serv1p").toggle();
          });
          $("#serv2").hover(function(){
            $("#serv2p").toggle();
          });
          $("#serv3").hover(function(){
            $("#serv3p").toggle();
          });
        });
        </script>