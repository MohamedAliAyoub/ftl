
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
                                                    Create Company
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
                                                <form method="post" action="{{route('company.store') }} ">
                                    {{ csrf_field() }} 
                                {{ method_field('post') }}


                                                             <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                  
                                                   <div class="container">
                                                        <div class="row">
                                                            <div class="col-12 mt-3">
                                                                <h3 class="text-white">
                                                                    <strong>Compay</strong>
                                                                </h3>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text"
                                                                        name="name"
                                                                          placeholder="name" class="form-control">
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text" name="location"
                                                                         placeholder="location" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text"
                                                                        name="city"
                                                                         placeholder="city" class="form-control">
                                                                    </div>
                                                                     <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text" name="About"
                                                                         placeholder="About " class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text" name="street"
                                                                        
                                                                         placeholder="street" class="form-control">
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-5 mt-3">
                                                                        <input type="text" name="postal_code"
                                                                         

                                                                        placeholder=" postal_code" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    <div class="col-lg-8 col-md-5 mt-3">
                                                                        <input type="text" name="website"
                                                                          placeholder="website" class="form-control">
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="type" value="sub">


                                                            <div class="col-12 mt-3 mb-3 text-right">
                                                                <button class="StyleBtn"><img src="dashboard/images/upload.svg" alt=""> Creat Company</button>
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