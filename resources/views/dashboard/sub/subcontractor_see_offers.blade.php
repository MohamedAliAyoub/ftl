  <style>
    @font-face {
      font-family: menufont;
      src: url(fonts/Montserrat-SemiBold.ttf);
    }

    @font-face {
      font-family: boldfont;
      src: url(fonts/Montserrat-Bold.ttf);
    }


    @font-face {
      font-family: sliderfont;
      src: url(fonts/Lora-Regular.ttf);
    }

    @font-face {
      font-family: sliderfontp;
      src: url(fonts/Montserrat-Light.ttf);
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

@extends('layouts.dashboard.app')
@section('content')
  <body style="background: url('dashboard/images/main.png')">

        <!-- Start The "subcontractor Offers" Page -->
        <section class="subcontractor-page mb-5">
            <div id="wrapper">
                <div class="content">
                    <!-- Start The Left Side -->
                    <?php include 'subcontractor-left-side.php' ?>
                    <!-- End The Left Side -->
                    <section class="center mt-5">
                    <!-- Start The Page Content Section -->
                        <section class="content-wrapper mt-4">
                            <section class="see-offer-page container">
                                <div class="single-offer">
                                    <section class="offers">
                                        <p class="time-rem">
                                            <span>Subcontractor Offers <strong class="ml-3">1</strong></span>
                                        </p>
                                        <div class="box-content  wow fadeIn" data-wow-duration="2s">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul class="list-unstyled mt-2 pl-2">
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
                                                                <img src="dashboard/images/boat.png" alt="">
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
                                                    <ul class="list-unstyled mt-2 ml-2">
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
                                                    <div class="mt-2">
                                                        <img src="dashboard/images/china (1)@2x.png" alt="">
                                                        <span>China</span>
                                                        <span style="font-weight:bold">30$</span>
                                                    </div>
                                                    <div class="text-center mb-2" style="display: flex; align-items: baseline;">
                                                        <strong class="mr-1">
                                                            30$
                                                        </strong>
                                                        <button class="hvr-float-shadow mt-3">
                                                            2 HOURS LEFT
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="mt-3 edit-offer-btn text-right">
                                        <button>Edit Your Offer</button>
                                    </div>
                                </div>
                            </section>
                        </section>
                    <!-- End The Page Content Section -->
                    </section>
                    <!-- Start The Right Side -->
                    <?php include 'subcontractor-right-side.php' ?>
                    <!-- End The Left Side -->
                </div>
            </div>
        </section>
        <!-- End The "subcontractor Offers" Page -->

@endsection
