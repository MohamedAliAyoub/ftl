@extends('layouts.dashboard.app')
@section('content')

	  <!-- Start The "Tender Request" Page -->

      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <section class="tender-request mb-5">
            <header class="main">
                <div>
                    <h1 class="text-white text-center p-5 wow fadeInUp" data-wow-duration="2s">
                        Tender Requets
                    </h1>
                </div>
            </header>
            <article>
                <div class="container">
                    <!-- Start Tender Management Section -->
                    <section class="tender-management mt-4">
                        <header>
                            <h3>
                                <strong>
                                    TENDER MANAGEMENT
                                </strong>
                            </h3>
                        </header>
                        <article class="mt-3">
                            <p>
                                To allow multiple shippers to pool their volumes in order to increase shipment volumes.
                                With a larger shipment volume,
                                we will be able to negotiate volume discounts or 
                                service contracts with ocean carriers on behalf of our customers.
                            </p>
                            <p>
                                If you have 5000 TEU annually or more and you need to enjoy our service please fill the tender request
                            </p>
                            <div class="submit-btn mt-4 hvr-float-shadow">
                             <a href="{{url('step1/start')}}"> 
                                <button>
                                    SUBMIT A REQUEST
                                </button>
                            </a>    
                            </div>
                        </article>
                    </section>
                    <!-- End Tender Management Section -->
                    <!-- Start Benefits Section -->
                    <section class="benefits-section mt-5">
                        <header>
                            <h3>
                                <strong>
                                    BENEFITS
                                </strong>
                            </h3>
                        </header>
                        <article class="mt-3">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    To get rate stability in the market.
                                </li>
                                <li class="mb-3">
                                    To create a level playing field within a segment of the trade.
                                </li>
                                <li class="mb-3">
                                    Agreements based on commodity are commonly used to standardize rate levels. 
                                    This eliminates the need for countless negotiations at varying levels that waste resources and 
                                    lead to rate instability.
                                </li>
                                <li class="mb-3">
                                    A stable rate environment also eliminates mistrust and 
                                    dissention between shippers and carriers in our marketplace.
                                </li>
                                <li class="mb-3">
                                    Properly structured agreements allow us to provide global coverage by utilizing several carriers.
                                </li>
                                <li class="mb-3">
                                    The customers can flow freely between carriers without the 
                                    constraints of individual contracts based on MQC (minimum quantity of cargo).
                                </li>
                                <li class="mb-3">
                                    Carriers benefit from a pool of customers utilizing their services who otherwise would not be reachable.
                                </li>
                            </ul>
                        </article>
                    </section>
                    <!-- End Benefits Section -->
                </div>
            </article>
        </section>
        <!-- End The "Tender Request" Page -->

@endsection