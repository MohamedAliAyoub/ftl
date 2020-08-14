@extends('layouts.dashboard.app')

@section('content')

      <!-- Start The "MarketPlace all Categories" Page -->
        <section class="marketplace-categories-page mb-5">
            <div class="container">
                <!-- Start Search Section -->
                <section class="search-section mt-3">
                    <form action="{{ route('products.index') }}" method="get">

                        <input type="text" name="search" value="{{ request()->search }}"class="form-control col-10 d-inline" placeholder="What are you looking for ?">
                        <button class="btn col-2 text-white">Search</button>
                    </form>
                </section>
                <!-- Start Search Section -->
                <!-- Start Marketplace Content Section -->
                <section class="marketplace-content">
                    <div class="row">
                        <!-- Start the Sidebar section -->
                        <div class="col-lg-3 col-md-4 mt-4">
                            <div class="sidebar-section">
                                <header>
                                    <p>
                                        <strong>
                                            All Categories 
                                        </strong>
                                    </p>
                                </header>
                                <article>
                                    <ul class="list-unstyled">
                                    @foreach ($categories as $category)

                                        <li>
                                            <a href="   {{route('category.sub',$category->id)}}" > {{ $category->name }}
                                            </a>
                                        </li>
                                    @endforeach    
                                        
                                        
                                    </ul>
                                </article>
                            </div>
                        </div>
                        <!-- End the Sidebar section -->
                        <!-- Start Products Section -->
                        <div class="col-lg-9 col-md-8">
                            <div class="row">
                            @if(count($products)>0)
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-md-6 mt-4">
                                    <div class="produc-content">
                                        <header><a href=
                                            "{{route('products.show' , $product->id)}}">
                                            <img src="{{ URL::to('/') }}/images/{{ $product->image }}" alt="">
                                            </a>
                                        </header>
                                        <article>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <strong>
                                                        {{ $product->description }}
                                                    </strong>
                                                </li>
                                                <li>
                                                    {{ $product->stock }} Products
                                                </li>
                                            </ul>
                                        </article>
                                    </div>
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
                        {{ $products->links() }}
                        </div>


                            </div>
                        </div>
                        <!-- End Products Section -->
                    </div>
                </section>
                <!-- End Marketplace Content Section -->
            </div>
        </section>
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