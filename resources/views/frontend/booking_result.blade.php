@extends('layouts.dashboard.app')
@section('content')
<body style="background-image: url(dashboard/images/main.png)">

<!-- Start Booking Details Page -->
<section class="booking-details-page"> 
    <div class="booking-content">
        <div class="container">
            <header class="mt-5 mb-3">
                <h3>
                    <strong>
                        YOUR BOOKING DETAILS
                    </strong>
                </h3>
            </header>
            <article>
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="box-content">
                            <header>
                                <p>
                                    From (City, Country/Region)
                                </p>
                            </header>
                            <article>
                                <label for="">choose your service</label>
                                <ul class="nav nav-pills row mb-3 text-center" id="pills-tab" role="tablist">
                                    <li class="nav-item col-md-6" role="presentation">
                                        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">CARRIER HAULAGE (SD)</a>
                                    </li>
                                    <li class="nav-item col-md-6" role="presentation">
                                        <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">MERCHANT HAULAGE (CY)</a>
                                    </li>
                                </ul>
                                <input type="text" placeholder="Country / Region" class="form-control mt-4">
                                <ul class="list-unstyled place">
                                    <li class="mt-3 mb-1 text-white">
                                        Previously used:
                                    </li>
                                    <li>
                                        Port Klang (Selangor),
                                    </li>
                                    <li>
                                        Malaysia Sokhna,
                                    </li>
                                    <li>
                                        Egypt Alexandria, Egypt
                                    </li>
                                </ul>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="box-content">
                            <header>
                                <p>
                                    To (City, Country/Region)
                                </p>
                            </header>
                            <article>
                                <label for="">choose your service</label>
                                <ul class="nav nav-pills row mb-3 text-center" id="pills-tab" role="tablist">
                                    <li class="nav-item col-md-6" role="presentation">
                                        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">CARRIER HAULAGE (SD)</a>
                                    </li>
                                    <li class="nav-item col-md-6" role="presentation">
                                        <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">MERCHANT HAULAGE (CY)</a>
                                    </li>
                                </ul>
                                <input type="text" placeholder="Country / Region" class="form-control mt-4">
                                <ul class="list-unstyled place">
                                    <li class="mt-3 mb-1 text-white">
                                        Previously used:
                                    </li>
                                    <li>
                                        Port Klang (Selangor),
                                    </li>
                                    <li>
                                        Malaysia Sokhna,
                                    </li>
                                    <li>
                                        Egypt Alexandria, Egypt
                                    </li>
                                </ul>
                            </article>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">I want to pick up the empty container(s) in another city</label>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="price-owner">
                            <header>
                                <p>
                                    Price owner
                                </p>
                            </header>
                            <article>
                                <header>
                                    <p>
                                        <img src="{{asset('dashboard/images/man.svg')}}" alt="">
                                        <span class="ml-2">Price owner</span>
                                    </p>
                                </header>
                                <div class="content pl-5">
                                    <p>
                                    The price owner is the company who owns the contract with the carrier
                                    </p>
                                    <div class="mr-5">
                                        <label for="">Customer reference (optional)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </article>
                            <button class="mt-2 mb-3">+ADD</button>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="date">
                            <label class="mb-3" for="">Earliest departure date</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="containers-box-content">
                            <header>
                                <p>
                                    Containers within your booking
                                </p>
                            </header>
                            <article>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="left-section">
                                            <div class="mr-5">
                                                <input type="text" placeholder="Commodity" class="form-control">
                                            </div>
                                            <ul class="list-unstyled place">
                                                <li class="mt-3 mb-1 text-white">
                                                    Previously used:
                                                </li>
                                                <li>
                                                    Port Klang (Selangor),
                                                </li>
                                                <li>
                                                    Malaysia Sokhna,
                                                </li>
                                                <li>
                                                    Egypt Alexandria, Egypt
                                                </li>
                                            </ul>
                                            <div class="custom-control mt-3 mb-2 custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input" id="temperature">
                                                <label class="custom-control-label" for="temperature">This cargo requires temperature control</label>
                                            </div>
                                            <div class="custom-control mb-3 custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input" id="dangerous">
                                                <label class="custom-control-label" for="dangerous">This cargo is considered dangerous</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 right-parent">
                                        <div class="right-section">
                                            <input type="text" placeholder="Container type & size" class="form-control">
                                            <div class="row">
                                                <div class="col-lg-6 mt-3">
                                                    <select type="text" placeholder="Product name" class="form-control">
                                                        <option>Container type & size</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 mt-3">
                                                    <select type="text" placeholder="Product name" class="form-control">
                                                        <option>Weight per container(kg - cargo only)e</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <div class="custom-control custom-checkbox mr-sm-2">
                                                        <input type="checkbox" class="custom-control-input" id="shipper">
                                                        <label class="custom-control-label" for="shipper">I wish to use a shipper's own container, an import return container or a triangulation option</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <div class="custom-control custom-checkbox mr-sm-2">
                                                        <input type="checkbox" class="custom-control-input" id="oversized">
                                                        <label class="custom-control-label" for="oversized">The cargo is oversized</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3 text-right">
                                                    <button>+ ADD ANOTHER CONTAINER TYPE/ SIZE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-12 mt-3 mb-5 text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-7 col-8">
                                <div class="confirm-btn">
                                   <a href="{{route('booking')}} "> <button>
                                        CONFIRM
                                    </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<!-- End Booking Details Page -->
@endsection

    <script>new WOW().init();</script>