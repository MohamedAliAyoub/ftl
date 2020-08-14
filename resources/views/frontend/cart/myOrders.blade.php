@extends('layouts.dashboard.app')
@section('content')
       <body style="background: url('dashboard/images/main.png')">

        <!-- Start The "MarketPlace" Page -->
        <section class="marketplace-page mb-5">
            <div class="container">
                <!-- Start Search Section -->
                <form action="#" method="get">

                    <section class="search-section mt-3">
                        <input type="text" name="search" value="{{ request()->search }}" class="form-control col-10 d-inline" placeholder="What are you looking for ?">
                        <button class="btn col-2 text-white">Search</button>
                    </section>
                </form>
                <!-- Start Search Section -->
                <!-- Start Marketplace Content Section -->
                <section class="marketplace-content">
                    <header class="text-center mt-4 text-white">
                        <h3 class="wow fadeInUp" data-wow-duration="2s">
                            <strong>
                               My last orders
                            </strong>
                        </h3>
                    </header>
                    <article>

                        <div class="row">
                         @if(count($orders) > 0 )   
                        @foreach($orders as $order)
                            <div class="col-lg-6 mt-4">
                        <a href="#">

                                <div class="product">
                                    
                                    <div class="product-content">
                                        <ul class="list-unstyled">
                                            <li>
                                                <strong>
                                                    {{$order->client->name}}
                                                </strong>
                                            </li>
                                            <li>
                                                  Total Price :  {{$order->total_price}}
                                               
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                         </a>   

                            </div>
                          @endforeach  
                           @else  
                            <h4 class="wow fadeInUp text-white" data-wow-duration="2s">
                            <strong>
                                no data found
                            </strong>
                            </h4>
                         @endif 
                         
                         <div class="col-12 mt-2"></div>
                        </div>
                    </article>
                </section>
                <!-- End Marketplace Content Section -->
            </div>
        </section>
        <!-- End The "MarketPlace" Page -->

@endsection