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
        <div class="container RequestPage">
            <header>
                <h2 class="mt-5 text-white" style="font-size: 30px;">
                    SHIPMENT REQUEST LCL
                </h2>
            </header>
            <div class="row text-white mt-5">
                <div class="col-12 borderCustom">
                    <label>About the shipment</label>
                    <form method="post" action="{{route('request_quote.storeLcl')}}"    enctype="multipart/form-data" >
                    @csrf()
                    <input type="hidden" name="type" value="LCL">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mt-3">
                            <select name="country_loading"  data-target="select[name=port_loading]" value="{{ old('country_loading') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Product name" class="form-control">
                                <option value="">Place of Loading</option>
                                  @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->title}}</option>
                                  @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-3">
                             <select name="country_discharge" value="{{ old('country_discharge') }}" data-target="select[name=port_discharge]" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Product name" class="form-control">
                                <option value="">Place of Discharge</option>
                                  @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->title}}</option>
                                  @endforeach
                            </select>
                        </div>
                    </div>
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

                <div class="col-12 borderCustom">
                    <label>COMMODITY</label>
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
                        <div class="col-md-12 first-check">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                
                                <input  type="checkbox" name="imo"  class="custom-control-input" id="customControlAutosizing">


                                <label class="custom-control-label" for="customControlAutosizing" style="font-size: 18px; color: #969292;">Dangerous cargo</label>
                            </div>
                        </div>
                    </div>
                </div>
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
                                        <input type="radio" checked="" name="lcl_type" value="{{ old('lcl_type') }}" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                        <label value="units"  class="custom-control-label" for="customRadioInline2" style="font-size: 18px; color: #969292;">Calculate by units</label>
                                    </div>
                                </a>

                            </div>

                                <!-- Start Total Shipment -->
                                <div class="total-shipment container" style="display:none;" id="totalShipment">
                                    <div class="row">
                                        <!-- <p  class="col col-lg-1 mt-3 p-1 text-center" style="background-color: #003d72;color: #cccccc; color: #969292; line-height:45px">Volume...</p> -->
                                        <div class=" col-lg-5 mt-3">
                                            <input name="lcl_total_volume" value="{{ old('lcl_total_volume') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Volume..." class="form-control">
                                        </div>
                                        <p  class="col-lg-1 no-padding mt-3 text-center InputDeg">CBM</p>
                                        <!-- <p  class="col col-lg-1 mt-3 p-1 text-center ml-2" style="background-color: #003d72; color: #969292;">Gross Weight..</p> -->
                                        <div class=" col-lg-5  mt-3">
                                            <input name="cross_weight_lcl" 
                                            value="{{ old('cross_weight_lcl') }}"
                                             style="background-color: #003d72; color:#cccccc; border-color: #003d72;" 
                                             type="text" 
                                             placeholder="Gross Weight lcl.."
                                              class="form-control" 
                                              >
                                        </div>
                                        <p  class="col-lg-1 no-padding mt-3 text-center InputDeg">MT</p>
                                    </div>
                                    
                                </div>
                                <!-- End Total Shipment -->
                                <!-- Start Units -->
                                <div class="total-shipment container"  id="units">
                                    <div class="row">
                                        <div class=" col-lg-12 d-flex  mt-3">
                                            <input style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" name="lcl_untis_lenght" 
                                            value="{{ old('lcl_untis_lenght') }}"
                                             placeholder="lcl untis lenght" class="mr-2 form-control">
                                            <p class="mr-2 text-center InputDeg">CM</p>
                                            <input name="lcl_untis_width"
                                            value="{{ old('lcl_untis_width') }}"
                                             style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Width" class="mr-2 form-control">
                                            <p class="mr-2 text-center InputDeg" >CM</p>
                                            <input name="lcl_untis_hieght" value="{{ old('lcl_untis_hieght') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Hight" class="mr-2 form-control">
                                            <p class="mr-2 text-center InputDeg">CM</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-lg-12 d-flex  mt-3">
                                            <input name="lcl_untis_quantity" 
                                            value="{{ old('lcl_untis_quantity') }}" style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text"  placeholder="lcl units container quantity " class="mr-2 form-control">
                                            <input name="cross_weight_lcl_untis" value="{{ old('cross_weight_lcl_untis') }}"  style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Gross Weight.." class="mr-2 form-control">
                                            <p class="mr-2 text-center InputDeg">MT</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- End Total Units -->
                                <!-- End Lcl Section -->
                            </div>
                        </div>
                <div class="col-12 borderCustom">
                    <label>Date</label>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mt-3">
                            <div class="">
                                <input name="request_date" value="{{ old('request_date') }}"  type="date" placeholder="Volume..." class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            @if(! isset(auth()->guard('client_web')->user()->id) )
                <div class="row text-white">
                    <div class="col-12  no-padding">
                        <label style="font-size:18px;">About You</label>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mt-3">
                                <input name="name" value="{{ old('name') }}" type="text" placeholder="Name"
                                       class="form-control">
                            </div>
                            <div class="col-lg-4 col-md-6 mt-3">
                                <input name="phone" type="text" value="{{ old('phone') }}" placeholder="Mobile number"
                                       class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 no-padding">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mt-3">
                                <input name="company_name" type="text" placeholder="Company Name"
                                       value="{{ old('company_name') }}" class="form-control">
                            </div>
                            <div class="col-lg-4 col-md-6 mt-3">
                                <input name="email" value="{{ old('email') }}"
                                       style="background-color: #003d72; color:#fff; border-color: #003d72;"
                                       type="email"
                                       placeholder="Email" class="form-control">
                            </div>
                            <div class="col-lg-8 col-md-6 mt-3">
                                <input name="note" value="{{ old('note') }}" type="text" placeholder="Write a Note"
                                       class="form-control">
                            </div>
                                   <div class="col-lg-8 col-md-6 mt-3">
                                <div class='file-input'>
                                    <input name="file" type="file" placeholder="Write a file" class="form-control">
                                    <span class='button'>
                                    <img src="{{asset('dashboard/images/uploadic.svg')}} " alt="">
                                    UPLOAD FILE
                                </span>
                                    <span class='label' data-js-label></span>
                                </div>
                            </div>

                            <div class="col-lg-2 offset-md-2 col-md-6 mt-3">
                                <button type="Submit" class="SubmitBtn"> Submit</button>
                            </div>
                @else
                

                            <div class="col-lg-8 col-md-6 mt-3">
                                <div class='file-input'>
                                    <input name="file" type="file" placeholder="Write a file" class="form-control">
                                    <span class='button'>
                                    <img src="{{asset('dashboard/images/uploadic.svg')}} " alt="">
                                    UPLOAD FILE
                                </span>
                                    <span class='label' data-js-label></span>
                                </div>
                            </div>
                            <div class="col-lg-2 offset-md-2 col-md-6 mt-3">
                                <button type="Submit" class="SubmitBtn"> Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                    <input type="hidden" name="client_id" value="{{auth()->guard('client_web')->user()->id}}">
                @endif





            </div>
       

                        </form>

@endsection

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
            $('input:radio[name="calculate"]').change(
                function () {
                    if (this.checked && this.value == '1') {

                    }
                });
        </script>

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

        let ports = JSON.parse('{!! $ports->toJson() !!}');
        $('select[name=country_loading],select[name=country_discharge]').change(function () {
            let elm = this;
            let options = '<option value="-1">Port (optional)</option>';
            if (parseInt(elm.value) > 0)
                options += (ports.filter(function (x) {
                    return parseInt(x.country_id) === parseInt(elm.value);
                }).map(function (x) {
                    return `<option value="${x.id}">${x.title}</option>`;
                }).join(''));
            $($(elm).data('target')).html(options);
        }).trigger('change');

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

