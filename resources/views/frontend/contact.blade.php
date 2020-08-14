@extends('layouts.dashboard.app')
@section('content')
 <body style="background: url('dashboard/images/main.png')">
        <!-- Start The Contact Page -->
        <section class="contact-page">
            <!-- Start Page Header  -->
            <header class="main">
                <h1 class="text-white text-center p-5 wow fadeInUp" data-wow-duration="2s">Contact Us</h1>
            </header>
            <!-- End Page Header  -->
            <!-- Start Page article  -->
            <article>
                <div class="container">
                    <div class="row">
                        <!-- Start Left Section  -->
                        <div class="col-lg-6">
                            <div class="our-contacts mt-4">
                                <header>
                                    <h3 class="text-white">Our Contacts</h3>
                                </header>
                                <article>
                                    <p class="text-white mt-2"> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                </article>
                            </div>
                            <div class="eypt mt-4">
                                <header>
                                    <h3 class="text-white">
                                        <img src="{{asset('dashboard/images/egy.svg ')}}" alt="">
                                        EGYPT (Head Office)
                                    </h3>
                                </header>
                                <article>
                                    <p class="text-white mt-2">
                                        <ul class="text-white list-unstyled">
                                            <li>
                                                FTL Logistics and Trading – Egypt
                                            </li>
                                            <li>
                                                Address: Villa 168, Dr. Ahmed Okasha St., New Cairo, Egypt
                                            </li>
                                            <li>
                                                Contact: Mohamed Hussein
                                            </li>
                                            <li>
                                                Mobile: +201008667661
                                            </li>
                                            <li>
                                                Email: m.hussein@ftlerates.com
                                            </li>
                                        </ul>
                                        <ul class="text-white list-unstyled">
                                            <li>
                                                Mohammed Hassan
                                            </li>
                                            <li>
                                                Mobile: +201008667661
                                            </li>
                                            <li>
                                                Email: m.hussein@ftlerates.com
                                            </li>
                                            <li>
                                                Tel: +223076652
                                            </li>
                                        </ul>
                                    </p>
                                </article>
                            </div>
                            <div class="switzerland mt-4">
                                <header>
                                    <h3 class="text-white">
                                        <img src="{{asset('dashboard/images/switzerland.svg')}}" alt="">
                                        SWITZERLAND
                                    </h3>
                                </header>
                                <article>
                                    <p class="text-white mt-2">
                                        <ul class="text-white list-unstyled">
                                            <li>
                                                FTL Logistics and Trading GmbH
                                            </li>
                                            <li>
                                                Address: Zürcherstrasse 53, 8500 Frauenfeld, Switzerland
                                            </li>
                                            <li>
                                                Contact: Mohamed Hussein
                                            </li>
                                            <li>
                                                Mobile: +201008667661
                                            </li>
                                            <li>
                                                Email: m.hussein@ftlerates.com
                                            </li>
                                            <li>
                                                ch@ftlerates.com
                                            </li>
                                        </ul>
                                    </p>
                                </article>
                            </div>
                            <div class="poland mt-4">
                                <header>
                                    <h3 class="text-white">
                                        <img src="{{asset('dashboard/images/poland.svg')}}" alt="">
                                        POLAND
                                    </h3>
                                </header>
                                <article>
                                    <p class="text-white mt-2">
                                        <ul class="text-white list-unstyled">
                                            <li>
                                                FTL Logistics and Trading GmbH
                                            </li>
                                            <li>
                                                Address: Zürcherstrasse 53, 8500 Frauenfeld, Switzerland
                                            </li>
                                            <li>
                                                Contact: Mohamed Hussein
                                            </li>
                                            <li>
                                                Mobile: +201008667661
                                            </li>
                                            <li>
                                                Email: m.hussein@ftlerates.com
                                            </li>
                                        </ul>
                                    </p>
                                </article>
                            </div>
                            <div class="sweden mt-4">
                                <header>
                                    <h3 class="text-white">
                                        <img src="{{asset('dashboard/images/sweden.svg')}}" alt="">
                                        SWEDEN
                                    </h3>
                                </header>
                                <article>
                                    <p class="text-white mt-2">
                                        <ul class="text-white list-unstyled">
                                            <li>
                                                FTL Logistics and Trading GmbH
                                            </li>
                                            <li>
                                                Address: Zürcherstrasse 53, 8500 Frauenfeld, Switzerland
                                            </li>
                                            <li>
                                                Contact: Mohamed Hussein
                                            </li>
                                            <li>
                                                Mobile: +201008667661
                                            </li>
                                            <li>
                                                Email: m.hussein@ftlerates.com
                                            </li>
                                        </ul>
                                    </p>
                                </article>
                            </div>
                        </div>
                        <!-- End Left Section  -->
                        <!-- Start Right Section  -->
                        <div class="col-lg-6">
                            <div class="lets-talk p-3 mt-5">
                                <h3 style="font-size: 30px;" class="text-white text-center">Let’s <span style="color:#314aef;">Talk</span></h3>
                                <input type="text" placeholder="Name" class="form-control mt-3">
                                <input type="text" placeholder="Email" class="form-control mt-3">
                                <input type="text" placeholder="Message" class="form-control mt-3">
                                <button style="background-color: #314aef;" class="btn btn-lg mt-5 col-12 text-center text-white mt-3">Send</button>
                            </div>
                            <div class="map-img mt-3 mb-5">
                                <img class="w-100" src="{{asset('dashboard/images/Capture.png')}}">
                            </div>
                        </div>
                        <!-- End Right Section  -->
                    </div>
                </div>
            </article>
            <!-- End Page article  -->
        </section>
        <!-- End The Contact Page -->
@endsection
      <script> new WOW().init();</script>
