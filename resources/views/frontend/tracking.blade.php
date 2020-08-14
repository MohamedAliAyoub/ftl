@extends('layouts.dashboard.app')
@section('content')
<body style="background-image: url(dashboard/images/main.png)">

<!-- Start Tracking Page -->
<section class="tracking-page">
    <header class="main">
         <h1 class="text-white text-center p-5 wow fadeInUp" data-wow-duration="2s">Shipment Tracking</h1>
    </header>
    <div class="tracking-content">
        <div class="container">
            <header class="mt-5 mb-4"> 
                <h3>
                Track Your <span>Shipment</span> 
                </h3>
            </header>
            <article>
                <div class="row justify-content-center mt-5 mb-5">
                    <div class="col-lg-7 col-md-8">
                        <!-- Start Search Section -->
                        <section class="search-section">
                            <input type="text" class="form-control col-10 d-inline" placeholder="What are you looking for ?">
                           <a href="{{route('tracking_map')}}"> <button class="btn col-2 text-white">Search</button></a>
                        </section>
                        <!-- Start Search Section -->
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
@endsection
    <script>new WOW().init();</script>

