@extends('layouts.dashboard.app')
@section('content')

@if(Session::has('sucess'))
<p class="alert alert-info">{{ Session::get('sucess') }}</p>
@endif
    <div class="TopSec col-md-12">
        <h1 class="text-white text-center wow fadeInUp" data-wow-duration="2s" style="font-family: sliderfont; font-size: 55px; padding-top: 170px;">
            Book Your Freight<br />
            Get an Instant Quote Online
        </h1>
        <center>
            <p style="font-size: 16px; font-family: sliderfontp;" class="lead mt-5 text-center text-white col-md-6">Get your freight quote online, book and pay in just a few seconds

        </center>
        <div class="searchHomrPageSimple">
            <div class="row SecSearch">
                <div class="col-md-5 padding-5">
                    <select class="form-control">
                        <option>Place of Loading</option>
                        <option>Place of Loading</option>
                        <option>Place of Loading</option>
                    </select>
                </div>
                <div class="col-md-5 padding-5">
                    <select class="form-control">
                        <option>Place of Loading</option>
                        <option>Place of Loading</option>
                        <option>Place of Loading</option>
                    </select>
                </div>
                <div class="col-md-2 padding-5">
                    <button class="btn btn-lg search-button">Search</button>
                </div>
            </div>
            <div class="row SecSearch">
                <div class="col-md-12 padding-5">
                    <a onclick="AdvancedSearch()">Advanced Search <i class="fas fa-chevron-down"></i></a>
                </div>
            </div>
        </div>
        <div class="searchHomrPage searchHomrPageAdvanced" style="display: none">
            <h5>  Fright Quotes</h5>
            <div class="row SecSearch">
                <div class="col-md-4 padding-5">
                    <label>Country city port</label>
                    <select class="form-control">
                        <option>Place of Loading</option>
                        <option>Place of Loading</option>
                        <option>Place of Loading</option>
                    </select>
                </div>
                <div class="col-md-1 padding-5">
                    <button><img src="images/reverseWhite.png"></button>
                </div>
                <div class="col-md-4 padding-5">
                    <label>Country city port</label>

                    <select class="form-control">
                        <option>Place of Discharge</option>
                        <option>Place of Discharge</option>
                        <option>Place of Discharge</option>
                    </select>

                </div>
                <div class="col-md-3 padding-5">
                    <label>Date of Load</label>
                    <input class="form-control" type="date" />
                </div>
            </div>
            <div class="row SecSearch">
                <div class="col-md-12 padding-5">
                    <label>Type of Shipment</label>
                    <div class="imgSelect">
                        <select class="form-control">
                            <option>Less container Load</option>
                            <option>Less container Load</option>
                            <option>Less container Load</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="text-center child">
                <button class="btn btn-lg search-button">Search</button>
            </div>
        </div>
    </div>


    <div style="background-image: url(images/main.png);height: auto; padding-top: 90px; margin-top: -14px;" class="col-md-12">
        <h1 class="text-white text-center wow fadeInUp" data-wow-duration="2s" style="font-family: sliderfont; font-size: 55px;">
            ONLINE MARKETPLACE <br>

        </h1>
        <center>
            <p style="font-size: 16px; font-family: sliderfontp;" class="lead mt-5 text-center text-white col-md-6">
                The First Digital Freight forwarder
                in Egypt and Middle East, provides the most complete and integrated services to our customers.
                We have a digital platform – a one-stop connection to the most extensive network of shippers/- Consignees – that
                enables E-Booking, digital exchange of shipping instructions, BLs and container tracking
            </p>
            <button style="background-color: #ffdb27;width: 170px; height: 55px; border-radius: 5px;color:#000000 !important" class="hvr-float-shadow btn btn-lg mt-5 p-2 text-white">Discover Now</button>
        </center>



        <div class="col-md-12 justify-content-center justify-items-center align-content-center text-left">
            <div class="container">
                <div class="row pb-3" style="font-family: menufont;">

                    <div class="offset-lg-2 col-lg-4 mt-5">
                        <div class=" text-left DiscoverContainer Discover1">
                         <a href="{{url('Category')}}">   <p class="lead lead1  text-white">SEARCH AND BOOK</p></a>
                            <p class="lead lead2">
                                Instantly find the best sea, air and inland freight
                                rates from 500+ providers with ideal delivery time.
                            </p>
                            <a href="{{url('Category')}}" class="learn-more">Learn more</a>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5">
                        <div class="text-left DiscoverContainer Discover3">
                           <a href="{{url('allShippment')}}"> 
                              <p class="lead lead1 text-white ml-3 mt-2">SHIP AND TRACK 
                              </p>
                           </a>
                            <p class="lead lead2">
                                Powerful logistics management with real-time tracking,
                                live notifications, and transparency.
                            </p>
                            <a href="{{url('allShippment')}}" class="learn-more">Learn more</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </div>

    <div class="col-md-12 TrakingSec">
        <div class="TrakingSecImg"></div>
        <h1 class="text-white text-center wow fadeInUp" data-wow-duration="2s">SHIPPMENT TRACKING</h1>
        <center>
            <p class="lead mt-3 text-center text-white col-md-6">
                Track your shipment by Container
                number or Bill Of Lading number. The tracking system allows to locate the current position of your container on
                the world map and determines time spent in port of transshipment
            </p>
            <div class="col-md-6 d-flex m-t-300">
                <input type="text" class="form-control" placeholder="Shipment ID">
                <button class="btn text-white">Search</button>
            </div>
            <a class=" hvr-float-shadow btn btn-lg mt-3 text-white">
                API or
                IFRAME integration
            </a>
        </center>






    </div>



    <div style="padding-top: 60px;padding-bottom: 0px;"
         class="col-md-12">
        <h1 class="text-white wow fadeInUp text-center" data-wow-duration="2s" style="font-family: sliderfont; font-size: 55px;">TENDER REQUEST</h1>

    </div>
    <center>
        <p style="font-size: 16px; font-family: sliderfontp;" class="lead mt-5 text-center text-white col-md-10">
            To allow multiple shippers to pool
            their volumes in order to increase shipment volumes. With a larger shipment volume, we will be able to negotiate
            volume discounts or service contracts with ocean carriers on behalf of our customers
        </p>

        <p style="font-size: 16px; font-family: sliderfontp;" class="lead mt-5 text-center text-white col-md-8">
            To shipping your goods all over the
            world for better rates because of joining. Usually there is only a nominal fee for joining, since the more
            shipments you can secure, the better the rates we can secure. No matter what you are shipping, it can be a great
            asset to open a tender for your business
        </p>

        <div class="col-md-3 text-center ">

            <a class=" hvr-float-shadow btn btn-lg mt-3 text-white BenefitsBtn">Check our Benefits</a>
        </div>
    </center>


    <div style="height: auto ; padding-top:130px;">

        <div class="col-md-12 network-parent">

            <div class="row">
                <div class="col-lg-5 m-auto">
                    <h3 class="h3 text-white ml-5 wow fadeInUp" data-wow-duration="2s" style="font-family: sliderfont; font-size: 40px;">
                        AFFILIATES <br>
                        NETWORK
                    </h3>
                    <p style="font-size: 16px;" class="lead text-white ml-5">
                        Start a partnership with FTL to develop your business
                        as a B2B business
                    </p>
                    <a style="background-color: #314aef; width: 300px;" class="hvr-float-shadow btn btn-lg mt-2 text-white ml-5">let’s work together</a>

                </div>
                <div class="col-lg-7">
                    <img style="" class="img-fluid network-img" 
                    src="{{asset('dashboard/images/network2.jpg')}}">
                </div>
            </div>

        </div>
    </div>
    <div style="height: auto;  padding-top:190px; margin-bottom: 100px;" class="col-md-12">
        <h1 class="text-white text-center wow fadeInUp" data-wow-duration="2s" style="font-family: sliderfont; font-size: 50px;    margin-bottom: 40px;">
            Our Network
        </h1>

        <div class="container ">
            <div class="row m-0 OurNetworkSec">
                <div class="col-md-3 padding-5 text-white mt-2">
                    <h3>+1,000,000</h3>
                    <h5>Air and Ocean Shipments</h5>
                </div>
                <div class="col-md-3 padding-5 text-white mt-2">
                    <h3>+100</h3>
                    <h5>Countries</h5>
                </div>
                <div class="col-md-3 padding-5 text-white mt-2">
                    <h3>+415,000</h3>
                    <h5>Tons of air freight/year</h5>
                </div>
                <div class="col-md-3 padding-5 text-white mt-2">
                    <h3>+740,000</h3>
                    <h5>TEU of ocean freight/year</h5>
                </div>
            </div>
        </div>
    </div>


    <style type="text/css">
      header.TopHeader {
        position: absolute;
      }
        .TopHeader nav {
  background-color:transparent;
  }
    </style>

  
@endsection