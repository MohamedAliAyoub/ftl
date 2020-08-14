@extends('layouts.dashboard.app')
@section('content')
  <body style="background: url('dashboard/images/main.png')">

        <!-- Start The "subcontractor" Page -->
        <section class="subcontractor-page mb-5">
            <div id="wrapper">
                <div class="content">
                    <!-- Start The Left Side -->
                    @include('dashboard.sub.subcontractor_left')

                    <!-- End The Left Side -->
                    <section class="center mt-5">
                    <!-- Start The Page Content Section -->
                        <section class="content-wrapper mt-4">
                            <section class="upload-request container">
                                <div class="upload-request-content">
                                    <header>
                                        <!-- Start The Tabs Section -->
                                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="{{url('sub/requests')}}" role="tab" aria-controls="pills-home" aria-selected="true">
                                                    New Request
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                                    All Requests <span>{{count($subs)}}</span>
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link offer-tab" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                                    Offers <span>{{count($other_quotes)}}</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- End The Tabs Section -->
                                    </header>
                                    <article>
                                        <div class="tab-content" id="pills-tabContent">
                                            <!-- Start New Request Tab  -->
                                            <!-- ################# -->
                                            <!-- end New Request Tab  -->
                                        
                                            <!-- Start All Requests Tab  -->
                                           <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <div id="request" >
                                                <section class="all-requests">
                                                    
        
                                             <section class="find-quote mt-3 mb-5">
                                                <div class="container">
                                                    <div class="row">
                                                        <!-- Start Market Request Section -->
                                                
                                                        <!-- End Market Request Section -->
                                                        <!-- Start Search Section -->
                                                        <div class="col-lg-12">
                                                            <section class="search-section">
                                                                <header>

                                                                    <!-- start search section -->
                                                                   <form method="get"  action="{{url('/sub/requests') }}" >

                                                                        <div class="search">
                                                                        <div class="row align-items-center text-center m-0">
                                                                            <div class="col-lg-4 col-md-4 select">
                                                                                <select name="search_landing">
                                                                                    <option value="" >Place of Loading</option>
                                                                                    @foreach($countries as $country)
                                                                                    <option value="{{$country->title}}" >{{$country->title}}</option>
                                                                                    
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-lg-1 col-md-1 no-padding">
                                                                                <img src="{{asset('dashboard/images/reverse.png')}}">
                                                                            </div>
                                                                            <div class="col-lg-4 col-md-4 select">

                                                                                <select  name="search_discharge">
                                                                                    <option value="">Place of Discharge</option>
                                                                                    @foreach($countries as $country)
                                                                                     <option value="{{$country->title}}" >{{$country->title}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-lg-3 col-md-3 text-center search-btn no-padding">
                                                                                <button type="submit" class="btn btn-lg search-button BtnSearchQouta">Search</button>
                                                                            </div>
                                                                        </div>
                                                                        </div>

                                                                    </form> 
                                                                    <!-- end search section -->

                                                                </header>

                                                    <!-- start sub  -->
                                                            @foreach($subs as $sub)
                                                                <article>
                                                                    <div class="box-content MakeRequestBoxcontent mt-3 wow fadeIn" data-wow-duration="2s">
                                                                        <div class="MakeRequestBox">
                                                                            <div class="row  m-0">
                                                                                <div class="col-lg-3 col-sm-6 padding-5 ">
                                                                                    <ul class="list-unstyled">
                                                                                        <img src="{{asset('dashboard/images/send1.svg')}}" alt="">
                                                                                        <li>
                                                                                            <p style="font-size: 18px">
                                                                                                DEPARTURE
                                                                                            </p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <p>
                                                                                                <strong>{{$sub->port_landing}}, {{$sub->place_landing}}</strong>
                                                                                            </p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <p>
                                                                                                {{$sub->date_landing}}
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-lg-3 col-sm-6 padding-5 ">
                                                                                    <ul class="list-unstyled">
                                                                                        <img src="{{asset('dashboard/images/send1.svg')}}" alt="">
                                                                                        <li>
                                                                                            <p style="font-size: 18px">
                                                                                                ARRIVAL
                                                                                            </p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <p>
                                                                                                <strong> {{$sub->port_discharge}}, {{$sub->place_discharge}}</strong>
                                                                                            </p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <p>
                                                                                                {{$sub->date_discharge}}
                                                                                                
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-lg-3 col-sm-6 padding-5 ">
                                                                                    <ul class="list-unstyled">
                                                                                        <img src="{{asset('dashboard/images/navigation.svg')}}" alt="">
                                                                                        <li>
                                                                                            <p style="font-size: 18px">
                                                                                                TRANSIT TIME
                                                                                            </p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <p>
                                                                                                <strong> {{$sub->transit_time}}</strong>
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-lg-3 col-sm-6 padding-5 ">
                                                                                    <ul class="list-unstyled">
                                                                                        <img src="{{asset('dashboard/images/vessel.svg')}}" alt="">
                                                                                        <li>
                                                                                            <p style="font-size: 18px">
                                                                                                VESSEL/VOYAGE
                                                                                            </p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <p>
                                                                                                <strong>RITA(004E)</strong>
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="PriceBook">
                                                                             <h4>TOTAL PRICE (Ocean + Surcharges)<span>USD {{$sub->freight_charges + $sub->charge_container+ $sub->origin_charges+ $sub->destination_charges }}</span></h4>
                                                                            <div class="CollapseRow">
                                                                                <button class="BookBtn">BOOK</button>
                                                                                            <a href="{{route('sub.edit',$sub->id)}} " class="BookBtn">
                                                                                                                Edit
                                                                                            </a> 

                                                                                                            <form class="BtnDel" method="post" action="{{route('sub.request.delete',$sub->id)}}" >
                                                                                                                {{ csrf_field() }}
                                                                                        

                                                                                                            <button type="submit" class="hvr-float-shadow mt-3">
                                                                                                                Delete
                                                                                                            </button>
                                                                                                            </form>
                                                                                <a class="CollapseBtn" data-toggle="collapse" data-target="#collapseDetails" aria-expanded="false" aria-controls="collapseExample">VIEW PRICE & SCHEDULE BREAKDOWN<i class="fas fa-caret-down"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="collapse" id="collapseDetails">
                                                                            <div class="row m-0">
                                                                                <div class="col-md-6">

                                                                                    <div class="SecRoad">
                                                                                        <div class="Shape"></div>
                                                                                        <h4>VESSEL SCHEDULE INFORMATION</h4>
                                                                                        <div class="SecHead">
                                                                                            <h5>Sokhna Terminal</h5>
                                                                                            <p>04 AUG 2020 - 23:59 (Departure)</p>
                                                                                        </div>
                                                                                        <div class="SecBody">
                                                                                            <div class="row m-0 form-group">
                                                                                                <img src="{{asset('dashboard/images/vessel.svg')}}" alt="">
                                                                                                <span>VESSEL INFORMATION</span>
                                                                                            </div>
                                                                                            <div class="row m-0 DetailsItem">
                                                                                                <div class="col-6 padding-5">
                                                                                                    <p>VESSEL/VOYAGE</p>
                                                                                                    <strong>RITA(004E)</strong>
                                                                                                </div>
                                                                                                <div class="col-3 padding-5">
                                                                                                    <p>IMO</p>
                                                                                                    <strong>NA</strong>
                                                                                                </div>
                                                                                                <div class="col-3 padding-5">
                                                                                                    <p>Flag</p>
                                                                                                    <strong>NA</strong>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div class="row m-0 DetailsItem">
                                                                                                <div class="col-3 padding-5">
                                                                                                    <p>CY</p>
                                                                                                    <strong>NA</strong>
                                                                                                </div>
                                                                                                <div class="col-3 padding-5">
                                                                                                    <p>SI Non-AMS</p>
                                                                                                    <strong>NA</strong>
                                                                                                </div>
                                                                                                <div class="col-3 padding-5">
                                                                                                    <p>SI AMS</p>
                                                                                                    <strong>NA</strong>
                                                                                                </div>
                                                                                                <div class="col-3 padding-5">
                                                                                                    <p>VGM</p>
                                                                                                    <strong>NA</strong>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div class="row m-0 form-group">
                                                                                                <img src="{{asset('dashboard/images/time.svg ')}}" alt="">
                                                                                                <span>DEADLINES</span>
                                                                                            </div>
                                                                                        </div>



                                                                                        <div class="SecHead">
                                                                                            <h5>Jeddah Red Sea Gateway Terminal</h5>
                                                                                            <p>06 AUG 2020 - 17:00 (Arrival)</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 DeatilsWord">
                                                                                    <div class="Sec">
                                                                                        <h5>PRICE BREAKDOWN</h5>
                                                                                        <h6>FREIGHT CHARGES</h6>
                                                                                        <div class="smallLine">
                                                                                            <p>
                                                                                                Basic Ocean Freight
                                                                                                40' Dry Standard x 1 (USD 311.00)
                                                                                            </p>
                                                                                            <span>USD 311.00</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="Sec">
                                                                                        <h5>ORIGIN CHARGES</h5>
                                                                                        <div class="smallLine">

                                                                                            <p>
                                                                                                Documentation Fee Origin
                                                                                            </p>
                                                                                            <span>USD 10.00</span>
                                                                                        </div>
                                                                                        <div class="smallLine">

                                                                                            <p>
                                                                                                Free In Service
                                                                                                40' Dry Standard x 1 (USD 195.00)
                                                                                            </p>
                                                                                            <span>USD 10.00</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="Sec">
                                                                                        <h5>DESTINATION CHARGES</h5>
                                                                                        <div class="smallLine">

                                                                                            <p>
                                                                                                Agency Documentation Fee Import
                                                                                            </p>
                                                                                            <span>SAR 325.00</span>
                                                                                        </div>
                                                                                        <div class="smallLine">

                                                                                            <p>
                                                                                                Electronic Data Interchange fee
                                                                                            </p>
                                                                                            <span>SAR 40.00</span>
                                                                                        </div>
                                                                                        <div class="smallLine">

                                                                                            <p>
                                                                                                Recovery for Handling - Import
                                                                                                40' Dry Standard x 1 (USD 112.00)
                                                                                            </p>
                                                                                            <span>SAR 40.00</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="Total">
                                                                                        <h4>TOTAL PRICE<span>USD 725.00</span></h4>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </article>  
                                                            @endforeach   
                                                    <!-- end sub  -->


                                                            </section>
                                                        </div>
                                                        <!-- End Search Section -->

                                                    </div>
                                                </div>
                                            </section>
                                                                                        
                                                </section>
                                            {{$subs->links()}}

                                                </div>

                                            <!-- End All Requests Tab  -->
                                            <!-- Start Offer Tab  -->
                                            <!-- ################# -->
                                            <!-- End Offer Tab  -->
                                        </div>
                                    </article>
                                </div>
                            </section>
                        </section>
                    <!-- End The Page Content Section -->
                    </section>
                    <!-- Start The Right Side -->
               
                    @include('dashboard.sub.subcontractor_right')

                    <!-- End The Left Side -->
                </div>
            </div>
        </section>
        <!-- End The "subcontractor" Page -->

@endsection 