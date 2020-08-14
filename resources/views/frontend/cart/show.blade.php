@extends('layouts.dashboard.app')
@section('content')

        <!-- Start The "MarketPlace" Page -->
        <section class="marketplace-checkout mt-5 mb-5">
            <div class="container">
                <!-- Start Marketplace Content Section -->
                <section class="checkout-content">
                    <article>
                        <div class="row">

                     <form action="{{ route('clients.orders.store', auth()->guard('client_web')->user()->id) }}" method="post">

                                {{ csrf_field() }}
                                {{ method_field('post') }}

                                @include('partials._errors')

                                @if(count($cart)>0)
                    @foreach($cart->items as $product)
                    @php($rand = Str::random())
                    <input type="hidden" name="products[{{$rand}}][product_id]" value="{{$product['id']}}">
                    <input type="hidden" name="products[{{$rand}}][quantity]" value="{{$product['qty']}}">
                            <div class="col-lg-12 mb-3">

                                <div class="product">

                                    <div class="row">
                                        <!-- Start Product Img -->

                                        <div class="col-lg-3">
                                            <div class="img-section">
                                                <img src="{{asset('dashboard/images/small-car.png')}}" alt="">
                                            </div>
                                        </div>
                                         
                                        <!-- End Product Img -->
                                        <!-- Start Product Content -->
                                        <div class="col-lg-9">
                                            <div class="product-content">
                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <ul class="list-unstyled row">
                                                                    <li class="col-12">
                                                                        <strong>
                                                                           {{$product['name']}}  
                                                                        </strong>
                                                                    </li>
                                                                    <li class="col-md-6">
                                                                        <strong style="font-size:14px">
                                                                            {{$product['price']}} 
                                                                        </strong>
                                                                    </li>
                                                                    <li class="col-md-6">
                                                                        <span style="font-size:14px; color: #8a98a7">
                                                                            {{$product['price']}}  Per Piece  
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <ul class="list-unstyled row">
                                                                    <li class="col-12">
                                                                        <strong>
                                                                            Quantity 
                                                                        </strong>
                                                                    </li>
                                                                    <li class="col-md-6">
                                                                        <strong style="font-size:18px">
                                                                            {{$product['qty']*$product['price']}}
                                                                        </strong>
                                                                        <span style="font-size:12px">
                                                                            Piece
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul class="list-unstyled" style="font-size:14px; color: #8a98a7">
                                                            <li>
                                                                Sold by: FTL
                                                            </li>
                                                            <li>
                                                                in stock
                                                            </li>
                                                            <li>
                                                                Location: Korea
                                                            </li>

                                                            <li>
                                                             <input type="number" value="{{$product['qty']}}" class="update-product-input"> 
                                                                <button type="button" class="update-product" data-url="{{route('product.updateShop',$product['id'])}}">Update</button>
                                                            
                                                                <button type="button" class="remove-product" data-url="{{route('product.remove',$product['id'])}}">X Cancel</button>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <strong>Total : ${{$cart->totalPrice}}</strong>
                                                </div>
                                            </div>
                                        </div>

                                        <br><br>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                                        <!-- End Product Content -->
                                          @else  
                                            <h4 class="wow fadeInUp text-white" data-wow-duration="2s">
                                            <strong>
                                                no data found
                                            </strong>
                                            </h4>
                                         @endif


                            <div class=" col-12 btn mt-4 text-center">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button  class="PROCED hvr-float-shadow" value="checkout">
                                            PROCED TO CHECK OUT
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="hvr-float-shadow">
                                            SHIP WITH FTL
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>
            </form>    <!-- End form market place -->

                <!-- End Marketplace Content Section -->
            </div>
        </section>
        <!-- End The "MarketPlace" Page -->

@endsection
@push('scripts')
        <script type="text/javascript">
            $(function(){
                $.extend({
                    redirectPost: function(location, args)
                    {
                        var inputs = '{!! csrf_field() !!}';
                        $.each( args, function( key, value ) {
                            value = value.split('"').join('\"')
                            inputs += '<input type="hidden" name="'+key+'" value="'+value+'">';
                        });
                        $(`<form action="${location}" method="POST">${inputs}</form>`).appendTo($(document.body)).submit();
                    }
                });
                $('.remove-product').click(function(e){
                    e.preventDefault();
                    $.redirectPost($(this).data('url'), {'_method' : 'delete'});
                });
                $('.update-product').click(function(e){
                    e.preventDefault();
                    $.redirectPost($(this).data('url'), {'_method' : 'put', 'qty': $(this).prev('input').val()});
                });
                $('.update-product-input').on('keydown', function (e) {
                  if (e.keyCode == 13) {
                    e.preventDefault();
                    $.redirectPost($(this).next('button').data('url'), {'_method' : 'put', 'qty': $(this).val()});
                  }
                });
            })
        </script>
@endpush