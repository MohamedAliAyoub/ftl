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
                    <!-- Start Offer Tab  -->
                    <section class="find-quote mt-3 mb-5">
                        <div class="container">
                            <div class="row">
                                <!-- Start Market Request Section -->

                                <!-- End Market Request Section -->
                                <!-- Start Search Section -->
                                <div class="col-lg-12">
                                    <section class="search-section">
                                        @foreach($other_quotes as $row)
                                            <h1>{{ $row['key']->id }}</h1>
                                            @foreach($row['items'] as $sub)
                                                <article>
                                                    <div class="box-content MakeRequestBoxcontent mt-3 fadeIn">
                                                        <div class="MakeRequestBox">
                                                            <div class="row  m-0">
                                                                <div class="col-lg-3 col-sm-6 padding-5 ">
                                                                    <ul class="list-unstyled">
                                                                        <img
                                                                            src="{{asset('dashboard/images/send1.svg')}}"
                                                                            alt="">
                                                                        <li>
                                                                            <p style="font-size: 18px">
                                                                                DEPARTURE
                                                                            </p>
                                                                        </li>
                                                                        <li>
                                                                            <p>
                                                                                <strong>{{$sub->port_landing}}
                                                                                    , {{$sub->place_landing}}</strong>
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
                                                                        <img
                                                                            src="{{asset('dashboard/images/send1.svg')}}"
                                                                            alt="">
                                                                        <li>
                                                                            <p style="font-size: 18px">
                                                                                ARRIVAL
                                                                            </p>
                                                                        </li>
                                                                        <li>
                                                                            <p>
                                                                                <strong> {{$sub->port_discharge}}
                                                                                    , {{$sub->place_discharge}}</strong>
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
                                                                        <img
                                                                            src="{{asset('dashboard/images/navigation.svg')}}"
                                                                            alt="">
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
                                                                        <img
                                                                            src="{{asset('dashboard/images/vessel.svg')}}"
                                                                            alt="">
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
                                                            <h4>TOTAL PRICE (Ocean +
                                                                Surcharges)<span>USD {{$sub->freight_charges + $sub->charge_container+ $sub->origin_charges+ $sub->destination_charges }}</span>
                                                            </h4>
                                                            <div class="CollapseRow">
                                                                <a href="{{route('sub.edit',$sub->id)}} "
                                                                   class="BookBtn">
                                                                    Edit
                                                                </a>
                                                                <a class="CollapseBtn" data-toggle="collapse"
                                                                   href="#collapseDetails{{$sub->id}}"
                                                                   aria-expanded="false"
                                                                   aria-controls="collapseExample">VIEW PRICE & SCHEDULE
                                                                    BREAKDOWN<i class="fas fa-caret-down"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="collapse" id="collapseDetails{{$sub->id}}">
                                                            <div class="row m-0">
                                                                <div class="col-md-6">

                                                                    <div class="SecRoad">
                                                                        <div class="Shape"></div>
                                                                        <h4>VESSEL SCHEDULE INFORMATION</h4>
                                                                        <div class="SecHead">
                                                                            <h5>{{$sub->port_landing}}</h5>
                                                                            <p>{{$sub->date_landing}} (Departure)</p>
                                                                        </div>
                                                                        <div class="SecBody">
                                                                            <div class="row m-0 form-group">
                                                                                <img
                                                                                    src="{{asset('dashboard/images/vessel.svg')}}"
                                                                                    alt="">
                                                                                <span>VESSEL INFORMATION</span>
                                                                            </div>
                                                                            <div class="row m-0 DetailsItem">
                                                                                <div class="col-6 padding-5">
                                                                                    <p>VESSEL/VOYAGE</p>
                                                                                    <strong>RITA(004E)</strong>
                                                                                </div>
                                                                                <div class="col-3 padding-5">
                                                                                    <p>IMO</p>
                                                                                    <strong>{{$sub->commodity}}</strong>
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
                                                                                <img
                                                                                    src="{{asset('dashboard/images/time.svg ')}}"
                                                                                    alt="">
                                                                                <span>DEADLINES</span>
                                                                            </div>
                                                                        </div>


                                                                        <div class="SecHead">
                                                                            <h5>{{$sub->port_discharge}} Terminal</h5>
                                                                            <p>{{$sub->date_discharge}}(Arrival)</p>
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
                                                                            <span>USD {{$sub->freight_charges}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="Sec">
                                                                        <h5>ORIGIN CHARGES</h5>
                                                                        <div class="smallLine">

                                                                            <p>
                                                                                Documentation Fee Origin
                                                                            </p>
                                                                            <span>USD {{$sub->origin_charges}}</span>
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
                                                                            <span>SAR {{$sub->destination_charges}}</span>
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
                                                                        <h4>TOTAL
                                                                            PRICE<span>{{$sub->destination_charges +$sub->origin_charges + $sub->freight_charges}}</span>
                                                                        </h4>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            @endforeach
                                        @endforeach
                                    </section>
                                    {{$subs->links()}}
                                </div>
                                <!-- End Offer Tab  -->
                            </div>
                        </div>
                    </section>
                </section>
            @include('dashboard.sub.subcontractor_right')
            <!-- End The Left Side -->
            </div>
        </div>
    </section>
    <!-- End T

@endsection
