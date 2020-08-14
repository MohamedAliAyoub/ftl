@if( ! in_array(request()->segment(1) ,['login','register', 'chooseLogin' ]))

    <div class="ServireSecFooter">
        <p>Need Help <a href="ContactUs.html">Contact Us</a></p>
    </div>
    <footer class="footerSec">
        <div class="container">
          <div class="row FooterStyle">
            <div class="col-md-2">
              <img src="{{asset('dashboard/images/ftoorlogo.png')}}">
              <h3 class="h3 text-white">Freight<br>
                Trade<br>
                logistic</h3>
                <div class="download-links">
                  <a href="">
                    <img src="{{asset('dashboard/images/app.png')}}" style="width: 100px;">
                  </a>
                  <a href="">
                    <img src="{{asset('dashboard/images/google.png')}}" style="width: 100px;">
                  </a>
                </div>
            </div>
            <div class="col-md-10">
              <div class="row m-0">
                <div class="col">

                  <h3>COMPANY</h3>
                  <a href="about.html">About us</a>
    
    
                </div>
             
                <div class="col">
    
                  <h3 >SERVICES </h3>
                  <a href="{{url('Category')}}">Marketplace</a>
                  <a href="{{route('allShippment')}}">Shipment Tracking</a>
                  <a href="{{route('allShippment')}}">All Shipping leads</a>
                  <a href="#">Booking</a>
                  <a href="#">Netowrk</a>
                  <a href="{{route('request')}}">Requests</a>
                </div>
                <div class="col">
                  <h3 >Marketplace </h3>
                  <a href="{{url('Category')}}">Marketplace</a>
                  <a href="{{url('Category')}}">Fright Marketplace</a>
                </div>
                <div class="col">
    
                  <h3>REFRENCES</h3>
                  <a href="#">lorem ipsum</a>
                  <a href="#">lorem ipsum</a>
                  <a href="#">lorem ipsum</a>
    
                </div>
                <div class="col ContactUS">
        <button>CONTACT US</button>
        <a href="#"><i class="fas fa-envelope"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
            </div>
              </div>
            </div>
          

         


          </div>
        </div>
    </footer>
    <div class="EndFooter">
        <div class="container">
            <div class="row m-0 text-white text-cente pb-2">
                <div class="col-md-6"><p style="font-size:14px; color:#ffffff" class="lead">2020 © FTL LLC</p></div>
                <div class="col-md-6">
                    <a href="#">Sitemap</a>
                    <a href="#">Terms and Conditions</a>
                    <a href="#">User Agreement</a>
                    <a href="#">Privacy Policy</a>
                </div>
            </div>
        </div>

    </div>
@endif    
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

      <script src="dashboard/js/libs/wow.min.js"></script>
      <script src="dashboard/js/main.js"></script>

      <script>   
        $(function(){
          new WOW().init(); 
        });
      </script>
</body>

</html>