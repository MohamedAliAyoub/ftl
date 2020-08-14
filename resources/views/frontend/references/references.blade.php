@extends('layouts.dashboard.app')
@section('content')
<body style="background-image: url(dashboard/images/main.png)">
    <!-- Start REFERENCES Page -->
    <section class="references-page mb-5"> 
        <header class="main">
            <h1 class="text-white text-center p-5 wow fadeInUp" data-wow-duration="2s">REFERENCES</h1>
        </header>
        <article>
            <div class="container mt-4 text-white">
                <header>
                    <h4>
                        <strong>
                            Reefer Cargo
                        </strong>
                    </h4>
                </header>
                <article class="mt-5">
                    <!-- Start The Tabs Section -->
                    <ul class="nav parent nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-tasks-tab" data-toggle="pill" href="#pills-tasks" role="tab" aria-controls="pills-tasks" aria-selected="false">Fresh fruits and vegetables</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-Maersk-tab" data-toggle="pill" href="#pills-Maersk" role="tab" aria-controls="pills-Maersk" aria-selected="false">Chilled meat, fish, dairy and vegetable products</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-changes-tab" data-toggle="pill" href="#pills-changes" role="tab" aria-controls="pills-changes" aria-selected="false">Fresh pastries, honey</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-customs-tab" data-toggle="pill" href="#pills-customs" role="tab" aria-controls="pills-customs" aria-selected="false">Frozen foods</a>
                        </li>
                    </ul>
                    <!-- End The Tabs Section -->
                    <div class="tab-content" id="pills-tabContent">
                        <!-- Start The All Tab -->
                        <div class="tab-pane fade show active mt-4" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                            <header>
                                <div class="mb-3">
                                    <button class="request">Request Fright Quote</button>
                                </div>
                            </header>
                            <article>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 mt-4">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <img 
                    src="{{ asset('dashboard/images/apples.png')}}" class="w-100" alt="">
                                                <div class="product-details">
                                                    <ul class="list-unstyled text-center w-100 mb-0">
                                                        <li>
                                                            APPLES
                                                        </li>
                                                        <li>
                                                            °C   +2…  +5
                                                        </li>
                                                        <li>
                                                            °F   +35.6…  +41
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mt-4">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <img src="{{asset('dashboard/images/apricots.png')}}" class="w-100" alt="">
                                                <div class="product-details">
                                                    <ul class="list-unstyled text-center w-100 mb-0">
                                                        <li>
                                                            APRICOTS
                                                        </li>
                                                        <li>
                                                            °C   +2…  +5
                                                        </li>
                                                        <li>
                                                            °F   +35.6…  +41
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mt-4">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <img src="{{asset('dashboard/images/canned.png')}}" class="w-100" alt="">
                                                <div class="product-details">
                                                    <ul class="list-unstyled text-center w-100 mb-0">
                                                        <li>
                                                            CANNED (NOT FISH)
                                                        </li>
                                                        <li>
                                                            °C   +2…  +5
                                                        </li>
                                                        <li>
                                                            °F   +35.6…  +41
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mt-4">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <img src="{{asset('dashboard/images/canned-fish.png')}}" class="w-100" alt="">
                                                <div class="product-details">
                                                    <ul class="list-unstyled text-center w-100 mb-0">
                                                        <li>
                                                            CANNED FISH
                                                        </li>
                                                        <li>
                                                            °C   +2…  +5
                                                        </li>
                                                        <li>
                                                            °F   +35.6…  +41
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- End The All Tab -->
                        <div class="tab-pane fade mt-4" id="pills-tasks" role="tabpanel" aria-labelledby="pills-tasks-tab">
                            <header>
                                <div class="mb-3">
                                    <button class="request">Request Fright Quote</button>
                                </div>
                            </header>
                            <article>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 mt-4">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <img src="{{asset('dashboard/images/apples.png')}}" class="w-100" alt="">
                                                <div class="product-details">
                                                    <ul class="list-unstyled text-center w-100 mb-0">
                                                        <li>
                                                            APPLES
                                                        </li>
                                                        <li>
                                                            °C   +2…  +5
                                                        </li>
                                                        <li>
                                                            °F   +35.6…  +41
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mt-4">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <img src="{{asset('dashboard/images/apricots.png')}}" class="w-100" alt="">
                                                <div class="product-details">
                                                    <ul class="list-unstyled text-center w-100 mb-0">
                                                        <li>
                                                            APRICOTS
                                                        </li>
                                                        <li>
                                                            °C   +2…  +5
                                                        </li>
                                                        <li>
                                                            °F   +35.6…  +41
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mt-4">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <img src="{{asset('dashboard/images/canned.png')}}" class="w-100" alt="">
                                                <div class="product-details">
                                                    <ul class="list-unstyled text-center w-100 mb-0">
                                                        <li>
                                                            CANNED (NOT FISH)
                                                        </li>
                                                        <li>
                                                            °C   +2…  +5
                                                        </li>
                                                        <li>
                                                            °F   +35.6…  +41
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mt-4">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <img src="{{asset('dashboard/images/canned-fish.png')}}" class="w-100" alt="">
                                                <div class="product-details">
                                                    <ul class="list-unstyled text-center w-100 mb-0">
                                                        <li>
                                                            CANNED FISH
                                                        </li>
                                                        <li>
                                                            °C   +2…  +5
                                                        </li>
                                                        <li>
                                                            °F   +35.6…  +41
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="tab-pane fade mt-4" id="pills-Maersk" role="tabpanel" aria-labelledby="pills-Maersk-tab">...</div>
                        <div class="tab-pane fade mt-4" id="pills-changes" role="tabpanel" aria-labelledby="pills-changes-tab">...</div>
                        <div class="tab-pane fade mt-4" id="pills-customs" role="tabpanel" aria-labelledby="pills-customs-tab">...</div>
                    </div>
                </article>
            </div>
        </article>
    </section>
    <!-- End REFERENCES Page -->

@endsection