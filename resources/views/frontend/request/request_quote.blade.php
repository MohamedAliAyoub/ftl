@extends('layouts.dashboard.app')
@section('content')
 <body style="background: url('dashboard/images/main.png')">
        <div class="container">
            
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <header>
                <h2 class="mt-5 text-white" style="font-size: 30px;">
                      Request Quote
                </h2>
            </header>
            <div class="row text-white mt-5">
                <div class="col-12">
                    <label style="font-size:18px;">About the shipment</label>
                <form method="post" action="{{route('request_quote.store')}}"  enctype="multipart/form-data" >
                    @csrf()
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mt-2">
                            <select name="country_loading" value="{{ old('country_loading') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Product name" class="form-control">
                                <option value="">Place of Loading</option>
                                  @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->title}}</option>
                                  @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-3">
                            <select name="country_discharge" value="{{ old('country_discharge') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Product name" class="form-control">
                                <option value="">Place of Discharge</option>
                                  @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->title}}</option>
                                  @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-3">
                            <input name="request_date" value="{{ old('request_date') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="date" placeholder="Volume..." class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mt-3">
                            <select name="port_loading" value="{{ old('port_loading') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Product name" class="form-control">
                                <option value="">Port (optional)</option>
                                @foreach($ports as $port)
                                    <option value="{{$port->id}}">{{$port->title}}</option>
                                  @endforeach

                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-3">
                            <select name="port_discharge" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="port_discharge" value="{{ old('port_discharge') }}" class="form-control">
                                <option value="">Port (optional)</option>
                                 @foreach($ports as $port)
                                    <option value="{{$port->id}}">{{$port->title}}</option>
                                  @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <label style="font-size:18px;">About the Product</label>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mt-3">
                            <select name="category_id" value="{{ old('category_id') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="category_id" class="form-control">
                                <option>Category </option>
                                   @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                  @endforeach
                            </select>
                        </div>
                         <div class="col-lg-4 col-md-6 mt-3">
                            <select name="product" value="{{ old('product') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Product name" class="form-control">
                                <option>Product </option>
                                   @foreach($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                  @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-3 first-check">
                    <div class="custom-control custom-checkbox mr-sm-2">
                    <input name="imo" type="checkbox" value="{{ old('imo') }}" class="custom-control-input" id="customControlAutosizing">
                    <label class="custom-control-label" for="customControlAutosizing" style="font-size: 18px; color: #969292;">IMO CARGO</label>
                    </div>
                </div>

            </div>

            <!-- Start Types Section -->
            <secttion class="shipment-type mt-5 mb-5">
                <header>
                    <h2 class="mt-5 text-white" style="font-size: 18px;">
                    SHIPMENT TYPE
                    </h2>
                </header>
                <article>
                    <div class="row">
                        <section class="col-lg-12 mt-3 types-section">

                            <!-- Start Types Section Taps -->
                        <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">

                              <li data-id="LCL"  class="nav-item text-center" role="presentation">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                    <img style="width:30px; height:30px; margin-bottom:5px;"  src="{{asset('dashboard/images/request-lcl.png')}}">
                                    <p class="text-white mb-0">LCL</p>
                                    </a>
                                </li>
                                <li data-id="FCL" class="nav-item text-center" role="presentation">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                    <img style="width:30px; height:30px; margin-bottom:5px;"  src="{{asset('dashboard/images/request-fcl.png')}}">
                                    <p class="text-white mb-0">FCL</p>
                                    </a>
                                </li>
                                <li data-id="Bulk" class="nav-item text-center" role="presentation">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                    <img  style="width:30px; height:30px; margin-bottom:5px;" src="{{asset('dashboard/images/request-bulk.png')}}">
                                    <p class="text-white mb-0">BULK</p>
                                    </a>
                                </li>
                                <input type="hidden" name="type" value="">
                        </ul>
                        </select>
                            <!-- End Types Section Taps -->

                            <!-- Start Types Section Content -->
                            <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <!-- Start Lcl Section -->
                            <div class="mt-3">
                                <a href="totalShipment" id="totalShipmentBtn" style="text-decoration: none;">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="lcl_type" id="customRadioInline1"  class="custom-control-input">
                                        <label value="total" class="custom-control-label" for="customRadioInline1" style="font-size: 18px; color: #969292;">Calculate by total shipment</label>
                                    </div>
                                </a>

                                <a href="units" id="unitsBtn" style="text-decoration: none;">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="lcl_type" value="{{ old('lcl_type') }}" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                        <label value="units"  class="custom-control-label" for="customRadioInline2" style="font-size: 18px; color: #969292;">Calculate by units</label>
                                    </div>
                                </a>

                            </div>

                                <!-- Start Total Shipment -->
                                <div class="total-shipment container" id="totalShipment">
                                    <div class="row">
                                        <!-- <p  class="col col-lg-1 mt-3 p-1 text-center" style="background-color: #003d72;color: #cccccc; color: #969292; line-height:45px">Volume...</p> -->
                                        <div class=" col-lg-2 col-10 mt-3">
                                            <input name="lcl_total_volume" value="{{ old('lcl_total_volume') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Volume..." class="form-control">
                                        </div>
                                        <p  class="col col-lg-1 col-2 mt-3 text-center" style= "border: solid 2px #314aef; color: #fff; font-weight:bold; line-height: 32px; height: 38px; border-radius: .25rem;">CBM</p>
                                        <!-- <p  class="col col-lg-1 mt-3 p-1 text-center ml-2" style="background-color: #003d72; color: #969292;">Gross Weight..</p> -->
                                        <div class=" col-lg-3 col-10 mt-3">
                                            <input name="cross_weight_lcl" 
                                            value="{{ old('cross_weight_lcl') }}"
                                             style="background-color: #003d72; color:#cccccc; border-color: #003d72;" 
                                             type="text" 
                                             placeholder="Gross Weight lcl.."
                                              class="form-control" 
                                              >
                                        </div>
                                        <p  class="col col-lg-1 col-2 mt-3 text-center" style= "border: solid 2px #314aef; color: #fff; font-weight:bold; line-height: 32px; height: 38px; border-radius: .25rem;">MT</p>
                                    </div>
                                    
                                </div>
                                <!-- End Total Shipment -->
                                <!-- Start Units -->
                                <div class="total-shipment container" style="display:none;" id="units">
                                    <div class="row">
                                        <div class=" col-lg-6 col-md-10 d-flex  mt-3">
                                            <input style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" name="lcl_untis_lenght" 
                                            value="{{ old('lcl_untis_lenght') }}"
                                             placeholder="lcl untis lenght" class="mr-2 form-control">
                                            <p class="mr-2 text-center" style= "padding: 0 6px; border: solid 2px #314aef; color: #fff; font-weight:bold; line-height: 32px; height: 38px; border-radius: .25rem;">CM</p>
                                            <input name="lcl_untis_width"
                                            value="{{ old('lcl_untis_width') }}"
                                             style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Width" class="mr-2 form-control">
                                            <p class="mr-2 text-center" style= "padding: 0 6px; border: solid 2px #314aef; color: #fff; font-weight:bold; line-height: 32px; height: 38px; border-radius: .25rem;">CM</p>
                                            <input name="lcl_untis_hieght" value="{{ old('lcl_untis_hieght') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Hight" class="mr-2 form-control">
                                            <p class="mr-2 text-center" style= "padding: 0 6px; border: solid 2px #314aef; color: #fff; font-weight:bold; line-height: 32px; height: 38px; border-radius: .25rem;">CM</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-lg-4 col-md-10 d-flex  mt-3">
                                            <input name="lcl_untis_quantity" 
                                            value="{{ old('lcl_untis_quantity') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text"  placeholder="lcl units container quantity " class="mr-2 form-control">
                                            <input name="cross_weight_lcl_untis" value="{{ old('cross_weight_lcl_untis') }}"  style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Gross Weight.." class="mr-2 form-control">
                                            <p class="mr-2 text-center" style= "padding: 0 6px; border: solid 2px #314aef; color: #fff; font-weight:bold; line-height: 32px; height: 38px; border-radius: .25rem;">MT</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- End Total Units -->
                                <!-- End Lcl Section -->
                            </div>

                            <!-- Start FCL Section -->
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <label style="font-size:18px; COLOR:#FFF;">About the shipment</label>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-lg-6 col-6 mt-1">
                                                <select name="container_type" value="{{ old('container_type') }}"  style="background-color: #003d72; margin-bottom: 1rem; color:#cccccc; border-color: #003d72;" type="text" placeholder="countainer name" class="form-control">
                                            <option value="">Container Type </option>
                                            <option value="20D">20D</option>
                                            <option value="40HD">40HD</option>
                                            <option value="20RF">20RF</option>
                                            <option value="40RF">40RF</option>
                                                </select>
                                            </div>
                                            <div class=" col-lg-3 col-4 mt-1">
                                                <input name="cross_weight_fcl"  value="{{ old('cross_weight_fcl') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Gross Weight.." class="form-control">
                                            </div>
                                            <div class="col-lg-2  col-2 mt-1">
                                                <p  class="p-1 text-center" style= "border: solid 2px #314aef; color: #fff; font-weight:bold; height: 38px; border-radius: .25rem;">MT</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class=" col-lg-4 mt-1">
                                                <input name="container_quantity"  value="{{ old('container_quantity') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Container QTY" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12 text-white">
                                                <button type ="button" style="width: 26px; border-radius: 3px; background-color: #314aef; border: none; color:#fff; outline: none; font-weight:bold;">+</button>
                                                <span>Add another Container</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <!-- End FCL Section -->

                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <!-- Start Bulk Section -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-6 col-6 mt-1">
                                                    <select name="bulk_type" value="{{ old('bulk_type') }}" style="background-color: #003d72; margin-bottom: 1rem; color:#cccccc; border-color: #003d72;" type="text" placeholder="Product name" class="form-control">
                                                        <option value="1">Cargo Type</option>
                                                    </select>
                                                </div>
                                                <div class=" col-lg-3 col-4 mt-1">
                                                    <input name="cross_weight_bulk" value="{{ old('cross_weight_bulk') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Gross Weight.." class="form-control">
                                                </div>
                                                <div class="col-lg-2  col-2 mt-1">
                                                    <p  class="p-1 text-center" style= "border: solid 2px #314aef; color: #fff; font-weight:bold; height: 38px; border-radius: .25rem;">MT</p>
                                                </div>
                                                <div class=" col-lg-4 col-9 mt-1">
                                                    <input name="bulk_loading_rate" value="{{ old('bulk_loading_rate') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Loading Rate.." class="form-control">
                                                </div>
                                                <div class="col-lg-2  col-3 mt-1">
                                                    <p  class="p-1 text-center" style= "border: solid 2px #314aef; color: #fff; font-weight:bold; height: 38px; border-radius: .25rem;">MT/DAY</p>
                                                </div>
                                                <div class=" col-lg-3 col-9 mt-1">
                                                    <input name="bulk_discharge_rate" value="{{ old('bulk_discharge_rate') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Discharging RATE.." class="form-control">
                                                </div>
                                                <div class="col-lg-2  col-3 mt-1">
                                                    <p  class="p-1 text-center" style= "border: solid 2px #314aef; color: #fff; font-weight:bold; height: 38px; border-radius: .25rem;">MT/DAY</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <!-- End  Bulk Section -->

                                
                            </div>
                            </div>
                            @if( ! isset(auth()->guard('client_web')->user()->id) )
                            <div class="row">
                                    <div class="row text-white mt-5 mb-5">
                                        <div class="col-12">
                                            <label style="font-size:18px;">About You</label>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 mt-3">
                                                    <input name="name" value="{{ old('name') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Name" class="form-control">
                                                </div>
                                                <div   class="col-lg-4 col-md-6 mt-3">
                                                    <input name="number" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" value="{{ old('number') }}" placeholder="Mobile number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-6 mt-3">
                                                    <input name="company_name" style="background-color: #003d72; color:#fff; border-color: #003d72;" type="text" placeholder="Company Name" value="{{ old('company_name') }}" class="form-control">
                                                </div>
                                                <div class="col-lg-4 col-md-6 mt-3">
                                                    <input name="email" value="{{ old('email') }}" style="background-color: #003d72; color:#fff; border-color: #003d72;" type="email" placeholder="Email" class="form-control">
                                                </div>
                                                <div class="col-lg-8 col-md-6 mt-3">
                                                    <input name="note" value="{{ old('note') }}" style="background-color: #003d72; color:#fff; border-color: #003d72;" type="text" placeholder="Write a Note" class="form-control">
                                                </div>
                                                <div class="col-lg-8 col-md-6 mt-3">
                                                     <input name="file" value="{{ old('note') }}" style="background-color: #003d72; color:#fff; border-color: #003d72;" type="file" placeholder="Write a file" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            @else
                                <input type="hidden" name="client_id" value="{{auth()->guard('client_web')->user()->id}}">

                                <div class="row">
                                    <div class="row text-white mt-5 mb-5">
                                        <div class="col-12">
                                            <label style="font-size:18px;">About You</label>
                                           
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                               
                                                <div class="col-lg-8 col-md-6 mt-3">
                                                    <input name="note" style="background-color: #003d72; color:#fff; border-color: #003d72;" type="text" placeholder="Write a Note" class="form-control">
                                                </div>
                                                <div class="col-lg-8 col-md-6 mt-3">
                                                     <input name="file" style="background-color: #003d72; color:#fff; border-color: #003d72;" type="file" placeholder="Upload a file" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            @endif
                            <!-- End Types Section Content -->

                        </section>

                    <section class="col-lg-12 mt-4 mb-5 next-button text-right">
                            <!--  This is SUBMIT button. -->

                        <button type="submit" style="margin-bottom: 40px;">SUBMIT</button>
                    </section>
                    </div>
                </article>
            </secttion>
        </form>

            <!-- End Types Section -->
        </div>
    </div>
@endsection

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
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
    $(document).ready(function(){
        $("#pills-tab li").on("click", function(){
            var dataId = $(this).attr("data-id");

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

