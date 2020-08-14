@extends('layouts.dashboard.app')
@section('content')
<div style="background-image: url(dashboard/images/header.png);background-size: 100% auto;background-position: center;background-repeat: no-repeat;" class="col-md-12">
  <h1 class="text-white text-center p-5 wow fadeInUp" style="font-family: sliderfont; font-size: 40px;" data-wow-duration="2s">TUTORIALS</h1>
   

</div>


</header> 
 
  <body style="background-color: #052b4c;">

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h2 class="h2 text-white mb-3">LEARN MORE ABOUT HOW TO USE <span style="color:#314aef;">FTL</span></h2>
                <p class="lead text-white mb-3">orem ipsum dolor sit amet, consectetuer adipiscing elit enean commodo eget dolor aenean massa eget dolor aenean massa ipsum dolor sit amet, consectetuer adipiscing elit enean commodo eget dolor aenean massa eget dolor aenean massa</p>
            <hr class="col-md-4 mb-5" style="background-color: #314aef; height: 2px;"> 
            <h2 class="h2 text-white mb-3">Tutorial .1</h2>
            <p class="lead text-white mb-3">How to lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
            <video class="col-md-12 mb-5" height="400" controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                </video>
              
              <h2 class="h2 text-white mb-3">Tutorial .2</h2>
            <p class="lead text-white mb-3">How to lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
            <video class="col-md-12 mb-5" height="400" controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
              </video>
              <h2 class="h2 text-white mb-3">Tutorial .3</h2>
            <p class="lead text-white mb-3">How to lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
            <video class="col-md-12 mb-5" height="400" controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
              </video>
            </div>
        </div>
    </div>
@endsection
<script>new WOW().init();</script>