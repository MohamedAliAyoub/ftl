@extends('layouts.dashboard.app')
@section('content')
 <body style="background: url('dashboard/images/main.png')">

        <!-- Start The "Find Quote" Page -->
        <section class="find-quote mt-3 mb-5">
        <div class="container">
            <div class="row">

                <!-- Start Market Request Section -->
                <div class="col-lg-3 mb-4">
                    <section class="market-request">
                        <header>
                           
                                <p>
                                    Make a Request
                                </p>
                            
                        </header>
                        <article>
                            <div class="shipment-type">
                                <p>
                                    Shipment type
                                </p>
                                <div class="shipment-content text-white">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="LCL">
                                        <label class="custom-control-label" for="LCL">LCL</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mr-sm-2 mt-3">
                                        <input type="checkbox" class="custom-control-input" id="FCL">
                                        <label class="custom-control-label" for="FCL">FCL</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mr-sm-2 mt-3">
                                        <input type="checkbox" class="custom-control-input" id="BULK">
                                        <label class="custom-control-label" for="BULK">BULK</label>
                                    </div>
                                </div>
                            </div>
                            <div class="apply-btn">
                                <button class="text-uppercase">Aplly</button>
                            </div>
                        </article>
                    </section>
                </div>
                <!-- End Market Request Section -->
                <!-- Start Search Section -->
                <div class="col-lg-9">
                    <section class="search-section">
                        <header>
                            <div class="search">
                                <div class="row align-items-center text-center m-0">
                                    <div class="col-lg-4 col-md-4 select">
                                        <select>
                                            <option>Place of Loading</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-1 col-md-1 no-padding">
                                        <img src="{{asset('dashboard/images/reverse.png')}}">
                                    </div>
                                    <div class="col-lg-4 col-md-4 select">

                                        <select>
                                            <option>Place of Discharge</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-md-3 text-center search-btn no-padding">
                                        <a class="btn btn-lg search-button">Search</a>
                                    </div>
                                </div>
                            </div>
                        </header>
                @if(count($quotes) > 0)
                    @foreach($quotes as $quote)    
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
                                                        <strong>{{$quote->port_landing}}, {{$quote->place_landing}}</strong>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                      {{$quote->date_landing}}
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
                                                        <strong>{{$quote->port_discharge}}, {{$quote->place_discharge}}</strong>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                    
                                                      {{$quote->date_discharge}}

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
                                                        <strong>{{$quote->transit_time}}</strong>
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
                                    <h4>TOTAL PRICE (Ocean + Surcharges)<span>USD {{$quote->freight_charges + $quote->charge_container+ $quote->origin_charges+ $quote->destination_charges }}</span></h4>
                                  
                            <form method="post" action="{{route('booking')}}"> 
                                @csrf
                            <input type="hidden" name="sub_id" value="{{$quote->id}}"> 
                            
                            <input type="hidden" name="client_id" 
                            value="{{auth()->user()->id}}"> 
                            <input type="hidden" name="request_data" 
                                    value="{{$request_data}}">

                                    <div class="CollapseRow">
                                    <button type="submit" class="BookBtn">BOOK</button>
                                        <a class="CollapseBtn" data-toggle="collapse" data-target="#collapseDetails" aria-expanded="false" aria-controls="collapseExample">VIEW PRICE & SCHEDULE BREAKDOWN<i class="fas fa-caret-down"></i></a>
                                    </div>
                            </form> 
                            <form action="{{route('storing')}}" method="post">
                                @csrf

                                <input type="hidden" name="request_data" 
                                    value="{{$request_data}}">
                                <button type="submit" class="BookBtn">make a request</button>

                                </div>
                            </form>    
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
                                                        <img src="{{asset('dashboard/images/time.svg')}}" alt="">
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
                @else
                    <article>
                           <div class="box-content MakeRequestBoxcontent mt-3 wow fadeIn" data-wow-duration="2s">
                                <div class="MakeRequestBox">
                                    <div class="row  m-0">
                        <h3>
                            no data like  your request and  your request has been stored
                        </h3>

                        <form action="{{route('storing')}}" method="post">
                                @csrf

                                <input type="hidden" name="request_data" 
                                    value="{{$request_data}}">
                                <button type="submit" class="BookBtn">make a request</button>

                                </div>
                            </form>
                            </div>
                                </div>
                                    </div>
                    </article>     
                @endif
                    </section>
                </div>
                <!-- End Search Section -->

            </div>
        </div>
    </section>
        <!-- End The "Find Quote" Page -->
@endsection

 <script>
        $(document).ready(function () {
            $("#totalShipmentBtn").click(function () {
                $("#totalShipment").show();
                $("#units").hide();
            });
            $("#unitsBtn").click(function () {
                $("#units").show();
                $("#totalShipment").hide();
            });
        });
    </script>
    <script>
        $('input:radio[name="calculate"]').change(
            function () {
                if (this.checked && this.value == '1') {

                }
            });
    </script>
    <!-- Optional JavaScript -->