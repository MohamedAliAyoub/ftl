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
        <section class="subcontractor-page mb-5">
            <div id="wrapper">
                <div class="content">
                    <!-- Start The Left Side -->
                    @include('dashboard.sub.subcontractor_left')
                    <!-- End The Left Side -->
                    <section class="center mt-5">
                    <!-- Start The Page Content Section -->
                        <section class="content-wrapper mt-4">
                            <section class="offers-page container">
                                <div class="offers-content">
                                    <header>
                                        <p>Offers bid</p>
                                    </header>
                                    <article>
                                        <div class="offer-content">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row align-items-center text-center">
                                                        <div class="col-md-1">
                                                            <img src="dashboard/images/user.png" alt="">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <p class="mb-0">another subcontractor Have a similar offers with a better price see details</p>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="subcontractor-see-offers.php">See Offer</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="offer-content">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row align-items-center text-center">
                                                        <div class="col-md-1">
                                                            <img src="dashboard/images/user.png" alt="">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <p class="mb-0">another subcontractor Have a similar offers with a better price see details</p>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="subcontractor-see-offers.php">See Offer</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="offer-content">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row align-items-center text-center">
                                                        <div class="col-md-1">
                                                            <img src="dashboard/images/user.png" alt="">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <p class="mb-0">another subcontractor Have a similar offers with a better price see details</p>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="subcontractor-see-offers.php">See Offer</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="offer-content">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row align-items-center text-center">
                                                        <div class="col-md-1">
                                                            <img src="dashboard/images/user.png" alt="">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <p class="mb-0">another subcontractor Have a similar offers with a better price see details</p>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="subcontractor-see-offers.php">See Offer</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
@endsection