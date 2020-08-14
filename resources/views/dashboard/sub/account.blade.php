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
                            <div class="">
                                <header class="main">
                                    <div class="welcome-message">
                                        <h5>
                                            Welcome Back Abdellrahman
                                        </h5>
                                        <p>
                                            Have a good day to review and organize your work
                                        </p>
                                    </div>
                                    <div class="welcome-img">
                                        <img src="{{ asset( ' dashboard/images/Welcome.png') }}" alt="">
                                    </div>
                                </header>
                                <article>
                                    <div class="row mt-4">
                                        <div class="col-lg-6 mb-3">
                                        	@if(session()->has('message'))
											    <div class="alert alert-success">
											        {{ session()->get('message') }}
											    </div>
											@endif

                                            <form action="{{route('user.update',auth()->user()->id)}}" method="post">
                                                {{ csrf_field() }} 
                                                    {{ method_field('post') }}
                                            <section class="personal-info mb-3">
                                                <header>
                                                    <h5>
                                                        <strong>
                                                            PERSONAL INFORMATION  
                                                                    <img src="{{ asset( ' dashboard/images/edit.svg') }}" alt=""> 
                                                         <button class="StyleBtn"><img src="dashboard/images/upload.svg" alt=""> Update</button>
                                                                      
                                                        </strong>
                                                    </h5>
                                                </header>
                                                <article>
                                                    <table class="table table-borderless">
                                                        <tbody>
                                                            <tr>
                                                                <td>Email</td>
                                                                <th colspan="2" scope="row">
                                                                    <input type="email" name="email"
                                                                    value = "{{auth()->user()->email}}"  class="form-control"> <img src="{{ asset( ' dashboard/images/check-mark.svg') }}" alt=""></th>
                                                            </tr>
                                                           
                                                            <tr>
                                                                <td>Name</td>
                                                                <th scope="row">
                                                                    <input type="text" name="name"
                                                                    value="{{auth()->user()->name}}"  class="form-control" ></th>
                                                               
                                                            </tr>

                                                             <tr>
                                                                <td>address</td>
                                                                <th scope="row">
                                                                    <input type="text" name="adress"  class="form-control"
                                                                value="{{auth()->user()->adress}}">
                                                            </th>
                                                              
                                                            </tr>
                                                            <tr>
                                                                <td>phone</td>
                                                                <th scope="row">
                                                                    <input type="text" name="phone"value="{{auth()->user()->phone}}"
                                                                     class="form-control"
                                                                    >
                                                                    </th>
                                                            </tr>
                                                          
                                                        </tbody>
                                                    </table>
                                                </article>
                                            </section>
                                            </form>
                                            <section class="email-info mb-3">
                                                <header>
                                                    <h5>
                                                        <strong>
                                                            EMAIL NOTIFICATION
                                                        </strong>
                                                    </h5>
                                                </header>
                                                <article>
                                                    <div class="custom-control custom-switch mt-2 p-0">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                        <label class="custom-control-label w-100" for="customSwitch1">Notify me when new messages arrive</label>
                                                    </div>
                                                    <div class="custom-control custom-switch mt-2 p-0">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                        <label class="custom-control-label w-100" for="customSwitch2">Notify me when new shipping lead posted</label>
                                                    </div>
                                                </article>
                                            </section>
                                            <section class="delete-profile mb-3">
                                                <header>
                                                    <h5>
                                                        <strong>
                                                            DELETE PROFILE
                                                        </strong>
                                                    </h5>
                                                </header>
                                                <article>
                                                    <div class="message">
                                                        <div>
                                                            <p>
                                                            Once you delete a profile, there is no going back. Please be certain.
                                                            </p>
                                                            <button>DELETE PROFILE</button>
                                                        </div>
                                                        <img src="{{ asset( ' dashboard/images/delete-profile.png ') }}" alt="">
                                                    </div>
                                                </article>
                                            </section>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            
                                        @if(isset($user->company->user_id))
											@if($user->company->user_id == auth()->user()->id))
                                            <section class="personal-info mb-3">
                                                <header>
                                                    <h5>
                                                        <strong>
                                                            COMPANY INFORMATION   <img src="{{ asset( ' dashboard/images/edit.svg ') }}" alt=""> 
                                                                    <a href="{{route('company.edit',$user->company->user_id)}}"><button class="StyleBtn"><img src="dashboard/images/upload.svg" alt=""> Edit</button></a>
                                                        </strong>
                                                    </h5>
                                                </header>
                                                <article>
                                                    <table class="table table-borderless">
                                                        <tbody>
                                                           
                                                            <tr>
                                                                <td>Company Name</td>
                                                                <th scope="row">
                                                                	
                                                                	{{$user->company->name}}</th>

                                                              
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td>Business Location</td>
                                                                <th scope="row">{{$user->company->location}}</th>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>City</td>
                                                                <th scope="row">{{$user->company->city}}</th>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td>Street Address</td>
                                                                 <th scope="row">{{$user->company->street}}</th>
                                                              
                                                            </tr>
                                                            <tr>
                                                                <td>Postal Code</td>
                                                                 <th scope="row">{{$user->company->postal_code}}</th>
                                                             
                                                            </tr>
                                                            <tr>
                                                                <td>Website</td>
                                                                <th scope="row">{{$user->company->website}}</th>
                                                            </tr>
                                                            <tr>
                                                                <td>About</td>
                                                                <th scope="row">{{$user->company->about}}</th>
                                                                
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </article>
                                            </section>
                                            @endif
                                            @else


                                        <section class="password-info mb-3">
                                                <header>
                                                    <h5>
                                                        <strong>
                                                          <a href="{{route('company.create')}}"> Add Company </a>
                                                        </strong>
                                                    </h5>
                                                </header>
                                        </section>
                                        @endif

                                            <section class="password-info mb-3">
                                                <header>
                                                    <h5>
                                                        <strong>
                                                            CHANGE PASSWORD
                                                        </strong>
                                                    </h5>
                                                </header>
                                                <form action="{{route('user.update',auth()->user()->id)}}" method="post">
                                                {{ csrf_field() }} 
                                                    {{ method_field('post') }}
                                                <article>
                                                  
                                                    <div class="pr-5 mt-3">
                                                        <input type="password" name="password" type="password" placeholder="Current Password" class="form-control $errors->has('password') ? ' is-invalid' : ''">
                                                         @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                
                                                    
                                                    <div class="mt-3">
                                                        <p>8-15 characters, including at least 1 number and 1 letter</p>
                                                        <button>Save</button>
                                                    </div>
                                                </article>
                                            </form>
                                            </section>
                                        </div>
                                    </div>
                                </article>
                            </div>
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