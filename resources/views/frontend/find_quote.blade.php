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
                                    <div class="row align-items-center text-center">
                                        <div class="col-lg-5 col-md-4 select">
                                            <select>
                                                <option>Place of Loading</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-5 col-md-4 select">
                                            <img src="{{asset('dashboard/images/reverse.png')}}">
                                            <select>
                                                <option>Place of Discharge</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 col-md-4 text-center search-btn">
                                            <a class="btn btn-lg search-button">Search</a>
                                        </div>
                                    </div>
                                </div>
                            </header>
                            <article>
                                <div class="box-content mt-3 wow fadeIn" data-wow-duration="2s">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p>
                                                        <strong>
                                                            №: 581720
                                                        </strong>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        23-JUN-2020 21:25 FCL
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <img src="{{asset('dashboard/images/boat.png')}}" alt="">
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        10 × 40' STANDARD
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p>
                                                        <strong>
                                                            QINGDAO (CN) — PRAGUE (CZ)
                                                        </strong>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        Product Category: Beer
                                                    </p>
                                                </li>
                                                <li>
                                                    <table class="table table-borderless">
                                                        <tbody>
                                                            <tr>
                                                                <td>Commodity Name:</td>
                                                                <td>
                                                                    <strong>
                                                                        Cerveza Charro
                                                                    </strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ready For Collection:</td>
                                                                <td>
                                                                    <strong>
                                                                        04-Jul-2020
                                                                    </strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Weight Of Cargo:</td>
                                                                <td>
                                                                    <strong>
                                                                        7.4 Metric Ton
                                                                    </strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 last-section">
                                            <div>
                                                <img src="{{asset('dashboard/images/china (1)@2x.png')}}" alt="">
                                                <span>China</span>
                                            </div>
                                            <div>
                                                <button class="hvr-float-shadow">
                                                    Contact
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content mt-3 wow fadeIn" data-wow-duration="2s">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p>
                                                        <strong>
                                                            №: 581720
                                                        </strong>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        23-JUN-2020 21:25 FCL
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <img src="{{asset('dashboard/images/boat.png')}}" alt="">
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        10 × 40' STANDARD
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p>
                                                        <strong>
                                                            QINGDAO (CN) — PRAGUE (CZ)
                                                        </strong>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        Product Category: Beer
                                                    </p>
                                                </li>
                                                <li>
                                                    <table class="table table-borderless">
                                                        <tbody>
                                                            <tr>
                                                                <td>Commodity Name:</td>
                                                                <td>
                                                                    <strong>
                                                                        Cerveza Charro
                                                                    </strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ready For Collection:</td>
                                                                <td>
                                                                    <strong>
                                                                        04-Jul-2020
                                                                    </strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Weight Of Cargo:</td>
                                                                <td>
                                                                    <strong>
                                                                        7.4 Metric Ton
                                                                    </strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 last-section">
                                            <div>
                                                <img src="{{asset('dashboard/images/china (1)@2x.png')}}" alt="">
                                                <span>China</span>
                                            </div>
                                            <div>
                                                <button class="hvr-float-shadow">
                                                    Contact
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content mt-3 wow fadeIn" data-wow-duration="2s">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p>
                                                        <strong>
                                                            №: 581720
                                                        </strong>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        23-JUN-2020 21:25 FCL
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <img src="{{asset('dashboard/images/boat.png ')}}" alt="">
                                                    </p>
                                                </li> 
                                                <li>
                                                    <p>
                                                        10 × 40' STANDARD
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p>
                                                        <strong>
                                                            QINGDAO (CN) — PRAGUE (CZ)
                                                        </strong>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        Product Category: Beer
                                                    </p>
                                                </li>
                                                <li>
                                                    <table class="table table-borderless">
                                                        <tbody>
                                                            <tr>
                                                                <td>Commodity Name:</td>
                                                                <td>
                                                                    <strong>
                                                                        Cerveza Charro
                                                                    </strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ready For Collection:</td>
                                                                <td>
                                                                    <strong>
                                                                        04-Jul-2020
                                                                    </strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Weight Of Cargo:</td>
                                                                <td>
                                                                    <strong>
                                                                        7.4 Metric Ton
                                                                    </strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 last-section">
                                            <div>
                                                <img src="{{asset('dashboard/images/china (1)@2x.png')}}" alt="">
                                                <span>China</span>
                                            </div>
                                            <div>
                                                <button class="hvr-float-shadow">
                                                    Contact
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </div>
                    <!-- End Search Section -->

                </div>
            </div>
        </section>
        <!-- End The "Find Quote" Page -->
@endsection

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    function(){
        if (this.checked && this.value == '1') {
           
        }
    });
    </script>
    <!-- Optional JavaScript -->