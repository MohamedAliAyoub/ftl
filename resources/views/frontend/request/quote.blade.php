@extends('layouts.dashboard.app')
@section('content')
<div style="background-image: url(dashboard/images/header.png);background-size: 100% auto;background-position: center;background-repeat: no-repeat;" class="col-md-12">
  <h1 class="text-white text-center p-5 wow fadeInUp" style="font-family: sliderfont; font-size: 40px;" data-wow-duration="2s">Requests</h1>
   

</div>


</header> 
 
  <body style="background-color: #052b4c; padding-bottom: 100px;">

    <div class="container">
      <header>
        <h2 class="mt-5 text-white" style="font-size: 30px;">
            SHIPMENT REQUEST
        </h2>
      </header>
        <div class="row">
          
          <div class="col-md-4 mt-3">
              <input style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Product name" class="form-control">
          </div>

          <div class="col-md-4 mt-3">
              <select style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Product name" class="form-control">
                <option>Category </option>
              </select>
          </div>

          <div class="col-md-12 mt-3">
            <div class="custom-control custom-checkbox mr-sm-2">
              <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
              <label class="custom-control-label" for="customControlAutosizing" style="font-size: 18px; color: #969292;">IMO CARGO</label>
            </div>
          </div>

        </div>

    <!-- Start Types Section -->
    <secttion class="shipment-type">
      <header>
        <h2 class="mt-3 text-white" style="font-size: 30px;">
          SHIPMENT TYPE
        </h2>
      </header>
      <article>
        <div class="row">
          <section class="col-lg-9 mt-3 types-section">

            <!-- Start Types Section Taps -->
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                  <img   src="{{asset('dashboard/images/smtrolley.png')}}">
                  <p class="text-white">LCL</p>
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                  <img   src="{{asset('dashboard/images/smcontainer.png')}}">
                  <p class="text-white">FCL</p>
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                  <img   src="{{asset('dashboard/images/smtransport.png')}}">
                  <p class="text-white">BULK</p>
                </a>
              </li>
            </ul>
            <!-- End Types Section Taps -->

            <!-- Start Types Section Content -->
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <!-- Start Lcl Section -->
                <div class="mt-3">

                  <a href="totalShipment" id="totalShipmentBtn" style="text-decoration: none;">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline1" style="font-size: 18px; color: #969292;">Calculate by total shipment</label>
                    </div>
                  </a>

                  <a href="units" id="unitsBtn" style="text-decoration: none;">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline2" style="font-size: 18px; color: #969292;">Calculate by units</label>
                    </div>
                  </a>

                </div>

                <!-- Start Total Shipment -->
                <div class="total-shipment container" id="totalShipment">
                  <div class="row">
                    <!-- <p  class="col col-lg-1 mt-3 p-1 text-center" style="background-color: #003d72;color: #cccccc; color: #969292; line-height:45px">Volume...</p> -->
                    <div class=" col-lg-2 col-10 mt-3">
                      <input style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Volume..." class="form-control">
                    </div>
                    <p  class="col col-lg-1 col-2 mt-3 text-center" style= "border: solid 2px #314aef; color: #fff; font-weight:bold; line-height: 32px; height: 38px; border-radius: .25rem;">CBM</p>
                    <!-- <p  class="col col-lg-1 mt-3 p-1 text-center ml-2" style="background-color: #003d72; color: #969292;">Gross Weight..</p> -->
                    <div class=" col-lg-3 col-10 mt-3">
                      <input style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Gross Weight.." class="form-control">
                    </div>
                    <p  class="col col-lg-1 col-2 mt-3 text-center" style= "border: solid 2px #314aef; color: #fff; font-weight:bold; line-height: 32px; height: 38px; border-radius: .25rem;">MT</p>
                  </div>
                </div>
                <!-- End Total Shipment -->
                <!-- Start Units -->
                <div class="total-shipment container" style="display:none;" id="units">
                  <div class="row">
                    <div class=" col-lg-1 col-3 mt-3">
                      <input style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="L" class="form-control">
                    </div>
                    <div class=" col-lg-1 col-3 mt-3">
                      <input style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="W" class="form-control">
                    </div>
                    <div class=" col-lg-1 col-3 mt-3">
                      <input style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="H" class="form-control">
                    </div>
                    <p  class="col col-lg-1 col-3 mt-3 text-center" style= "border: solid 2px #314aef; color: #fff; font-weight:bold; line-height: 32px; height: 38px; border-radius: .25rem;">CBM</p>
                    <div class=" col-lg-3 col-5 mt-3 Quantity">
                      <input style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Quantity" class="form-control">
                    </div>
                    <div class=" col-lg-2 col-5 mt-3">
                      <input style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Gross Weight.." class="form-control">
                    </div>
                    <p  class="col col-lg-1 col-2 mt-3 text-center" style= "border: solid 2px #314aef; color: #fff; font-weight:bold; line-height: 32px; height: 38px; border-radius: .25rem;">MT</p>
                  </div>
                </div>
                <!-- End Total Units -->
                <!-- End Lcl Section -->
              </div>

              <!-- Start FCL Section -->
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                  <div class="col-lg-6 col-6 mt-1">
                    <select style="background-color: #003d72; margin-bottom: 1rem; color:#cccccc; border-color: #003d72;" type="text" placeholder="Product name" class="form-control">
                      <option>Container Type </option>
                    </select>
                  </div>
                  <div class=" col-lg-3 col-4 mt-1">
                    <input style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Gross Weight.." class="form-control">
                  </div>
                  <div class="col-lg-2  col-2 mt-1">
                    <p  class="p-1 text-center" style= "border: solid 2px #314aef; color: #fff; font-weight:bold; height: 38px; border-radius: .25rem;">MT</p>
                  </div>
                  <div class=" col-lg-4 mt-1">
                    <input style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Container QTY" class="form-control">
                  </div>
                </div>
              </div>
              <!-- End FCL Section -->

              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <!-- Start Bulk Section -->
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-6 mt-1">
                      <select style="background-color: #003d72; margin-bottom: 1rem; color:#cccccc; border-color: #003d72;" type="text" placeholder="Product name" class="form-control">
                        <option>Cargo Type</option>
                      </select>
                    </div>
                    <div class=" col-lg-3 col-4 mt-1">
                      <input style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Gross Weight.." class="form-control">
                    </div>
                    <div class="col-lg-2  col-2 mt-1">
                      <p  class="p-1 text-center" style= "border: solid 2px #314aef; color: #fff; font-weight:bold; height: 38px; border-radius: .25rem;">MT</p>
                    </div>
                    <div class=" col-lg-4 col-9 mt-1">
                      <input style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Loading Rate.." class="form-control">
                    </div>
                    <div class="col-lg-2  col-3 mt-1">
                      <p  class="p-1 text-center" style= "border: solid 2px #314aef; color: #fff; font-weight:bold; height: 38px; border-radius: .25rem;">MT/DAY</p>
                    </div>
                    <div class=" col-lg-3 col-9 mt-1">
                      <input style="background-color: #003d72; color:#cccccc; border-color: #003d72;" type="text" placeholder="Discharging RATE.." class="form-control">
                    </div>
                    <div class="col-lg-2  col-3 mt-1">
                      <p  class="p-1 text-center" style= "border: solid 2px #314aef; color: #fff; font-weight:bold; height: 38px; border-radius: .25rem;">MT/DAY</p>
                    </div>
                  </div>
                </div>
                <!-- End  Bulk Section -->
              </div>
            </div>
            <!-- End Types Section Content -->

          </section>

          <section class="col-lg-3 next-button">
            <button>Next</button>
          </section>
        </div>
      </article>
    </secttion>

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
    $('input:radio[name="calculate"]').change(
    function(){
        if (this.checked && this.value == '1') {
           
        }
    });
    </script>