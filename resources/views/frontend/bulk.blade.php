@extends('layouts.dashboard.app')
@section('content')
  <body style="background-image: url(dashboard/images/main.png);height: 100vh;">
   <div style="background-image:url(dashboard/images/bulk.png);background-repeat: no-repeat;background-position: right;height: 100vh;display: flex;
   align-items: center;" class="col-md-12">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <img  class="mb-3" src="{{asset('dashboard/images/smtransport.png')}} ">
               </div>
               <div class="col-md-12">
               <h3 class="text-white wow fadeInUp" data-wow-duration="2s" style="font-family: sliderfontp; font-weight:bold; font-size: 40px;">IN BULK</h3>
               </div>
               <div class="col-md-6 mt-3">
                   <p style="font-family: sliderfontp;font-size: 18px;
                   font-weight: 300;
                   font-stretch: normal;
                   font-style: normal;
                   line-height: 1.22;
                   letter-spacing: 0.27px;
                   text-align: left;
                   color: #ffffff;
                   margin-bottom: 30px">
                 Transportation of bulk, break-bulk, project and heavy cargo, military equipment and other non-standard cargoes that are too big or too heavy for a container 
                 <br>
                 (NCL - Non Container Load). Vessel chartering and forwarding ship cargo lots.
                </p>
               <a href="{{route('find_quote')}} "><button style=" width: 134px;
                height: 45px;
                border-radius: 5px;
                background-color: #314aef;font-family: sliderfontp; font-weight:bold; font-size: 14px;" class="hvr-float-shadow btn btn-lg text-white mr-2">Find Quote</button></a>

  <a href="{{route('requestBulk')}}"><button style=" width: 142px;
  height: 45px;
  border-radius: 5px;
  border: solid 2px #314aef;ont-family: sliderfontp; font-weight:bold; font-size: 14px;" class="hvr-float-shadow btn btn-lg text-white">Make Request</button></a>
               </div>

        </div>
    </div>

   </div>


@endsection