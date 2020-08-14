@extends('layouts.dashboard.app')
@section('content')
       <body style="background: url('{{asset('dashboard/images/main.png')}}')">

        <!-- Start The "MarketPlace" Page -->
        <section class="marketplace-page mb-5">
            <div class="container">
                <!-- Start Search Section -->
                <form action="{{ route('frontend.category') }}" method="get">

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
                                Welcome to FTL Marketplace
                            </strong>
                        </h3>
                    </header>
                    <article>
                        <div class="row">
                         @if(count($categories) > 0 )
                        @foreach($categories as $category)
                            
                        <a href="{{route('frontend.subCategories',$category->id)}}">

                            <div class="col-lg-6 mt-4">
                        <a href="{{route('sub.product',$category->id)}}">

                                <div class="product">
                                    <div class="img-section">
                                        <img src="dashboard/images/product.png" alt="">
                                    </div>
                                    <div class="product-content">
                                        <ul class="list-unstyled">
                                            <li>
                                                <strong>
                                                    {{$category->name}}
                                                </strong>
                                            </li>
                                            <li>
                                                20,000 Products
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
                        {{ $categories->links() }}
                        </div>
                    </article>
                </section>
                <!-- End Marketplace Content Section -->
            </div>
        </section>
        <!-- End The "MarketPlace" Page -->

@endsection