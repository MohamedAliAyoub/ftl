@extends('layouts.dashboard.app')
@section('content')

<div
    style="background-image: url(dashboard/images/header.png);background-size: 100% auto;background-position: center;background-repeat: no-repeat;"
    class="col-md-12">
    <h1 class="text-white text-center p-5 wow fadeInUp" style="font-family: sliderfont; font-size: 40px;" data-wow-duration="2s">About Us</h1>


  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 text-center mt-3">

        <a id="about" style="border:solid 1px #314aef;cursor: pointer;"
          class="btn btn-lg text-right text-white pl-5 pr-5 hvr-float-shadow">About</a>

      </div>

      <div class="col-md-4 text-center mt-3">

        <a id="service" style="border:solid 1px #314aef;cursor: pointer;"
          class="btn btn-lg text-right text-white pl-5 pr-5 hvr-float-shadow">Services</a>

      </div>

      <div class="col-md-4 text-center mt-3">

        <a id="benefits" style="border:solid 1px #314aef;cursor: pointer;"
          class="btn btn-lg text-right text-white pl-5 pr-5 hvr-float-shadow">Benefits</a>

      </div>


      <!-- Start About Div -->
      <div id="aboutdiv" class="col-md-12 mt-5">
        <h2 class="h2 text-white mb-3"><span style="color:#314aef;">FTL</span> Group</h2>
        <p class="lead text-white mb-3">founded in 2013, specialized in freight forwarding and trading with several
          commodities, Since 2016 we started as FTL Logistics and Trading with our head office in Switzerland and
          offices in Egypt, and Poland, and we are looking in the near future to cover
          the whole world throught our offices in Far East, Gulf, and Americas <span id="btnreadmore"
            style="color:#314aef;text-decoration: underline;cursor: pointer;">Read More</span>

        </p>
        <p class="text-white lead" style=" display:none" id="readmorep">

          With FTL Logistics, you get Digital Freight Forwarding Solutions to serve the ever-growing demands for freight
          forwarding and logistics requirements.
          <br>
          The company today is fully equipped with our infrastructure and expertise to transport cargo, so be it by
          Ocean, Air or Land, to any part of the world. With our experienced team,
          <br>
          FTL Logistics is certainly a great option for all your logistics requirements. The complete ability to cope
          with any type of problem has always been a strong point of our company.
          <br>
          Our clients know that they can rely on an efficient logistics consultancy for freight delivered and collected
          across the globe.
          <br>
          With FTL, you can get access to trusted freight carriers for their shipments, with the freedom of choice of a
          marketplace and the security and convenience of a digital freight forwarder.
        </p>

        <center class="mb-5">
          <a style="background-color: #314aef;" class="btn btn-lg text-white pl-5 pr-5 mt-5">Start Integration</a>
          <a style="border:solid 1px #314aef;" class="btn btn-lg text-white pl-5 pr-5 mt-5">Start Integration</a>

        </center>

      </div>
      <!-- End About Div -->
        </div>
      </div>

      <!-- Start Services Div -->
      <div style="display:none;" id="servicediv" class="container pt-5 pb-5">
        <div class="row">

          <div class="col-md-4 mt-4  text-center text-white">
            <div style="min-height: 285px; background-color: #00376e; border-radius: 14px;" class="p-2">

              <img class="p-2" style="border-radius: 50%; background-color: #0a5581;" 
              src="{{asset('dashboard/images/transport.png')}}">
              <h4 class="h4">Sea Freight</h4>
              <p style="font-size: 16px;" class="lead">Our expertise in handling both LCL Consolidation and FCL shipments
                with all the services you need to establish a comprehensive door-to-door process.
                Our carrier relationships and market activity enable us to offer highly costs reduction value, and reduce
                your </p>

            </div>
          </div>
          <div class="col-md-4 mt-4 text-center text-white">
            <div style="min-height: 285px; background-color: #00376e; border-radius: 14px;" class="p-2">

              <img class="p-2" style="border-radius: 50%; background-color: #0a5581;" src="{{asset('dashboard/images/cargo.png')}}">
              <h4 class="h4">Air Freight</h4>
              <p style="font-size: 16px;" class="lead">FTL Logistics provides Airfreight services through its global
                partners. Most of our business is being moved through professional partners with whom we have very long
                relationships </p>
            </div>
          </div>
          <div class="col-md-4 mt-4 text-center text-white">
            <div style="min-height: 285px; background-color: #00376e; border-radius: 14px;" class="p-2">

              <img class="p-2" style="border-radius: 50%; background-color: #0a5581;" src="{{asset('dashboard/images/delivery-truck.png')}}">
              <h4 class="h4">Land Transportation</h4>
              <p style="font-size: 16px;" class="lead">The traditional mode of using road has improved substantially in this
                part of the world.
                <br>
                FTL Logistics provides the expertise of moving your shipments by road in any</p>
            </div>
          </div>


          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-4 text-center text-white mt-4">
                <div style="min-height: 425px; background-color: #00376e; border-radius: 14px;" class="p-2">

                  <img class="p-2" style="border-radius: 50%; background-color: #0a5581;" src="{{asset('dashboard/images/swarehouse.png')}} ">
                  <h4 class="h4">Special Cargo and Break Bulk</h4>
                  <p style="font-size: 16px;" class="lead">At FTL, we know that handling special cargo is different from
                    container shipping. We have the capacity to deliver your special cargo to any part of the world. Our
                    international team of special cargo experts have an in-depth knowledge and understanding of the challenges
                    involved, and are here to help you every step of the way
                    We provide tailored and efficient solutions for shipping your In Gauge, OOG and Bulk cargo, through our
                    global network of agents all over the world.</p>
                </div>
              </div>
            <div class="col-md-4 text-center text-white mt-4">
              <div style="min-height: 425px; background-color: #00376e; border-radius: 14px;" class="p-2">

                <img class="p-2" style="border-radius: 50%; background-color: #0a5581;" src="{{asset('dashboard/images/scargo.png')}} ">
                <h4 class="h4">Tender Management</h4>
                <p style="font-size: 16px;" class="lead">TTo allow multiple shippers to pool their volumes in order to
                  increase shipment volumes. With a larger shipment volume, we will be able to negotiate volume discounts or
                  service contracts with ocean carriers on behalf of our customers.
                  To shipping your goods all over the world for better rates because of joining. Usually there is only a
                  nominal fee for joining, since the more shipments you can secure, the better the rates we can secure. No
                  matter what you are shipping, it can be a great asset to open a tender for your business.</p>
              </div>
            </div>
            </div>
          </div>


        </div>
      </div>
      <!-- End Services Div -->

      <!-- Start Benefits Div -->
      <div style="display:none;" id="benefitsDiv" class="container pt-5 pb-5">
        <ul style="list-style-image: url('dashboard/images/about.svg');">
          <li style="font-size: 18px; font-weight: bold; color: #fff; margin-bottom: 20px">
            <span style="position: relative; top: -16px; left: 10px;">Get rate stability in the market.</span>
          </li>
          <li style="font-size: 18px; font-weight: bold; color: #fff; margin-bottom: 20px">
            <span style="position: relative; top: -16px; left: 10px;">Create a level playing field within a segment of the trade.</span>
          </li>
          <li style="font-size: 18px; font-weight: bold; color: #fff; margin-bottom: 20px">
            <span style="position: relative; top: -16px; left: 10px;">
            Agreements based on commodity are commonly used to standardize rate levels.
            This eliminates the need for countless negotiations at varying levels that waste
            resources and lead to rate instability. 
            </span>       
          </li>
          <li style="font-size: 18px; font-weight: bold; color: #fff; margin-bottom: 20px">
            <span style="position: relative; top: -16px; left: 10px;">
            A stable rate environment also eliminates mistrust and dissention between shippers and
            carriers in our marketplace.
            </span>
          </li>
          <li style="font-size: 18px; font-weight: bold; color: #fff; margin-bottom: 20px">
            <span style="position: relative; top: -16px; left: 10px;">
            Properly structured agreements allow us to provide global coverage by utilizing several carriers.
            </span>
          </li>
          <li style="font-size: 18px; font-weight: bold; color: #fff; margin-bottom: 20px">
            <span style="position: relative; top: -16px; left: 10px;">
            The customers can flow freely between carriers without the constraints of individual contracts based on
            MQC (minimum quantity of cargo).
            </span>
          </li>
          <li style="font-size: 18px; font-weight: bold; color: #fff; margin-bottom: 20px">
            <span style="position: relative; top: -16px; left: 10px;">
            Carriers benefit from a pool of customers utilizing their services who otherwise would not be reachable.
            </span>
          </li>
        </ul>
      </div>
      <!-- End Benefits Div -->

@endsection