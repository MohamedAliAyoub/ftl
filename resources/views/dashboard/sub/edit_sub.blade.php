<style>
    @font-face {
      font-family: menufont;
      src: url(fonts/Montserrat-SemiBold.ttf);
    }

    @font-face {
      font-family: boldfont;
      src: url(fonts/Montserrat-Bold.ttf);
    }


    @font-face {
      font-family: sliderfont;
      src: url(fonts/Lora-Regular.ttf);
    }

    @font-face {
      font-family: sliderfontp;
      src: url(fonts/Montserrat-Light.ttf);
    }

    .nav-item {
      font-family: menufont;
      font-size: 16px;
    }

    .secondmenu {

      font-family: boldfont;
      font-size: 18px;
      font-stretch: normal;
      font-style: normal;
      line-height: 2.3;
      letter-spacing: normal;
      text-align: left;
      color: #ffffff;

    }

    .slider {
      font-family: sliderfont;
      font-weight: unset !important;
    }

    .sliderp {
      font-family: sliderfontp;
      font-size: 16px;
    }

    .search {
      font-family: boldfont;

    }
</style>


@extends('layouts.dashboard.app')
@section('content')
  <body style="background: url('dashboard/images/main.png')">

        <!-- Start The "subcontractor" Page -->
        <section class="subcontractor-page mb-5">
            <div id="wrapper">
                <div class="content">
                    <!-- Start The Left Side -->
                    @include('dashboard.sub.subcontractor_left')

                    <!-- End The Left Side -->
                    <section class="center mt-5">
                    <!-- Start The Page Content Section -->
                        <section class="content-wrapper mt-4">
                            <section class="upload-request container">
                                <div class="upload-request-content">
                                    <header>
                                        <!-- Start The Tabs Section -->
                                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                                    edit request
                                                </a>
                                            </li>
                                        </ul>
    					@if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                                        <!-- End The Tabs Section -->
                                    </header>
                                    <article>
                                        <div class="tab-content" id="pills-tabContent">
                                            <!-- Start New Request Tab  -->
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <div id="request" class="request-content text-center">
                                                <form method="post" action="{{route('sub.update', $sub->id) }} ">
   													 {{ csrf_field() }}	

   													 	<input type="hidden" name="id" value="{{$sub->id}} ">
                                                   <div class="container">
                                                        <div class="row">
                                                            <div class="col-12 mt-3">
                                                                <h3 class="text-white">
                                                                    <strong>Request Data</strong>
                                                                </h3>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text"
                                                                        name="place_landing"
                                                                        value="{{$sub->place_landing}}"  placeholder="Place of Loading" class="form-control">
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text" name="place_discharge"
                                                                        value="{{$sub->place_discharge}}" placeholder="Place of Discharge" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text"
                                                                        name="port_landing"
                                                                        value="{{$sub->port_landing}}"  placeholder="Place of Loading" class="form-control">
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text" name="port_discharge"
                                                                        value="{{$sub->port_discharge}}" placeholder="Place of Discharge" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text" name="commodity"
                                                                        value="{{$sub->commodity}}"  placeholder="Commodity" class="form-control">
                                                                    </div>
                                                                    @if($sub->type =='fcl'|| $sub->type == null)
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <select name= "container_type" type="text" placeholder="Product name" class="form-control">
                                                                            <option  value ="20d"

																			<?php if($sub->container_type == '20d') echo 'selected'; 
																			?>

                                                                            >20D</option>
                                                                             <option
																		<?php if($sub->container_type == '40d') echo 'selected'; 
																			?>
                                                                              value="40d">40D</option>
                                                                        </select>
                                                                    </div>
                                                                      @else
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="number" value="{{$sub->weight}}" name="weight"
                                                                         placeholder=" weight" class="form-control">
                                                                    </div>

                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text" name="charge_type"
                                                                        value="{{$sub->charge_type}}"
                                                                         placeholder="Charge type" class="form-control">
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text" name="shipping_line"
                                                                        value="{{$sub->shipping_line}}" 

                                                                        placeholder="shipping line" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text" name="valid_from"
                                                                        value="{{$sub->valid_from}}"  placeholder="Valid From" class="form-control">
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text" name="valid_to"
                                                                        value="{{$sub->valid_to}}"  placeholder="Valid To" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-10 mt-3">
                                                                    	 <input type="text" name="date_landing"
                                                               value="{{$sub->date_landing}}"  placeholder="Valid From" class="form-control">
                                                                     
                                                                    </div>
                                                                        <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text" name="date_discharge"
                                                                        value="{{$sub->date_discharge}}"  placeholder="date discharge " class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                              <input type="text" name="shipping_line"
                                                                        value="{{$sub->shipping_line}}"  placeholder="shipping line" class="form-control">
                                                                    </div>
                                                                
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text" name="language"
                                                                        value="{{$sub->language}}"  placeholder="charge container" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                             <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text" name="transit_time"
                                                                        value="{{$sub->transit_time}}"  placeholder="transit time " class="form-control">
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text" name="freight_charges"
                                                                        value="{{$sub->freight_charges}}"  placeholder="freight charges" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text" name="origin_charges"
                                                                        value="{{$sub->origin_charges}}"  placeholder="origin charges " class="form-control">
                                                                    </div>
                                                                   <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text" name="destination_charges"
                                                                        value="{{$sub->destination_charges}}"  placeholder="destination charges  " class="form-control">
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                                                                                        <div class="col-12 mt-3">
                                                              <div class="row text-white" >
                                                                <div class="custom-control custom-checkbox mr-sm-3 col-lg-4 col-md-5 mt-3">
                                                                    <input type="checkbox" 
                                                                     name="offer"
                                                                     <?php if($sub->offer == 1) echo'checked' ?>  class="custom-control-input" id="Offer" placeholder="offer per hours"
                                                                     >
                                                                    <label class="custom-control-label" for="Offer">Mark as Offer</label>
                                                                </div>
                                                                 <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="number" name="time_per_hour" value="{{$sub->time_per_hour}}" 
                                                                          placeholder=" time per hour  " class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>

       													
                                                               



                                                            <div class="col-12 mt-3 mb-3 text-right">
                                                                <button class="StyleBtn"><img src="dashboard/images/upload.svg" alt=""> UPLOAD SHIPPMENT</button>
                                                            </div>

                                                        </div>

                                                 </div>
                                                </form>
                                                </div>
                                               
                                            </div>
                                            <!-- End New Request Tab  -->
                                          
                                           
                                        </div>
                                    </article>
                                </div>
                            </section>
                        </section>
                    <!-- End The Page Content Section -->
                    </section>
                    <!-- Start The Right Side -->
               
                    @include('dashboard.sub.subcontractor_right')

                    <!-- End The Left Side -->
                </div>
            </div>
        </section>
        <!-- End The "subcontractor" Page -->

@endsection 