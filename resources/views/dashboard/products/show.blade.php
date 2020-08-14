@extends('layouts.dashboard.app')

@section('content')

      <!-- Start The "MarketPlace all Categories" Page -->
              <!-- Start The "MarketPlace Product" Page -->
        <section class="marketplace-product mb-5">
            <div class="container">
                <!-- Start Marketplace Content Section -->
                <section class="product-content">
                @if( session()->has('success'))
                    <div class="alert alert-success">{{ session()->get('success') }}</div>
                @endif
                     
                    <header class="mt-4">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('frontend.category')}}">All Categories</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{route('frontend.subCategories',$product->sub_category_id)}}">{{$product->category->name}}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
                            </ol>
                        </nav>
                    </header>
                    <article class="mt-4">
                        <div class="row">

                            <div class="col-lg-12 mb-3">
                                <div class="product">
                                    <div class="row">
                                        <!-- Start Product Img -->
                                        <div class="col-lg-5">
                                            <div class="img-section">
                                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                    <!-- <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                    </ol> -->
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                       
                                                            <img src="{{ URL::to('/') }}/images/{{ $product->image }}" class="d-block w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ URL::to('/') }}/images/{{ $product->image }}" class="d-block w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ URL::to('/') }}/images/{{ $product->image }}" class="d-block w-100" alt="...">
                                                        </div>
                                                       
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                                <!-- <img src="images/small-car.png" alt=""> -->
                                            </div>
                                        </div>
                                        <!-- End Product Img -->
                                        <!-- Start Product Content -->
                                        <div class="col-lg-7">
                                            <div class="product-content">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <strong>
                                                            {{$product->name}}
                                                        </strong>
                                                    </li>
                                                    <li>
                                                        {{$product->stoke}} in stock
                                                    </li>
                                                    <li>
                                                       price:  {{$product->price}}  
                                                    </li>
                                                    <li>
                                                        <strong>
                                                            Description
                                                        </strong>
                                                    </li>
                                                    <li>
                                                        <p>
                                                        {{$product->description}}
                                                        </p>
                                                    </li>
                                                  
                                                   
                                                    <li>
                                                        <strong class="mr-2">
                                                            Location
                                                        </strong>
                                                        <img src="images/korea.svg" alt="">
                                                        <span class="mr-2">korea</span>
                                                    </li>
                                                    <li>
                                                        <ul class="list-unstyled row mt-4">
                                                                <li class="col-md-6">
                                                             <a href="{{route('cart.add',
                                                             $product->id)}}">

                                                              
                                                                <button class="first hvr-float-shadow" type="submit">{{$product->name}}</button>
                                                        </a>


                                                            </li>
                                                            <li class="col-md-6">
                                                                <button class="hvr-float-shadow">SHIP WITH FTL</button>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Product Content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>
                <!-- End Marketplace Content Section -->
            </div>
        </section>
        <!-- End The "MarketPlace Product" Page -->
        <!-- End The "MarketPlace all Categories" Page -->
@endsection
<script >
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