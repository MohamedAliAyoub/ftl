
@extends('layouts.dashboard.app')
@section('content')




<body style="background-image: url(images/main.png)">
 
  <div class="container h-100 SignForm Register">
    <div class="row  h-100 justify-content-center align-items-center m-auto">
         
        <div class="col-md-12 text-center mt-5 mb-3">
            <img src="images/logo.png">
         </div>
            
        <form class="col-md-7">
            <h3 class="m-3 text-white text-center">Sign up To Continue</h3>
            <div class="row m-0 StepPartContainer">
                <div class="StepPart StepPart1 active">1</div>
                <div class="StepPart StepPart2">2</div>
                <div class="StepPart StepPart3">3</div>
            </div>
            <div class="Step1 StepContainer">
                <div class="row m-0">
                    <div class="col-md-6 form-group padding-5">
                        <input type="text" placeholder="First Name" class="form-control" id="" aria-describedby="">
                    </div>
                    <div class="col-md-6 form-group padding-5">
                        <input type="text" placeholder="Last Name" class="form-control" id="" aria-describedby="">
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-md-6 form-group padding-5">
                        <input type="email" placeholder="email" class="form-control" id="" aria-describedby="">
                    </div>
                    <div class="col-md-6 form-group padding-5">
                        <input type="tel" placeholder="Phone" class="form-control" id="" aria-describedby="">
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-md-6 form-group padding-5">
                        <input type="text" placeholder="Department" class="form-control" id="" aria-describedby="">
                    </div>
                    <div class="col-md-6 form-group padding-5">
                        <input type="text" placeholder="Country" class="form-control" id="" aria-describedby="">
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-md-6 form-group padding-5">
                        <input type="text" placeholder="Language" class="form-control" id="" aria-describedby="">
                    </div>
                    <div class="col-md-6 form-group padding-5">
                        <input type="text" placeholder="Job Title" class="form-control" id="" aria-describedby="">
                    </div>
                </div>
                <a onclick="Step2()" class="btn btn-lg  col-md-12 mb-3 SubmitBtn">Next</a>
            </div>
            <div class="Step2 StepContainer">
                <div class="row m-0">
                    <div class="col-md-6 form-group padding-5">
                        <input type="text" placeholder="Company Name" class="form-control" id="" aria-describedby="">
                    </div>
                    <div class="col-md-6 form-group padding-5">
                        <input type="text" placeholder="Account Type" class="form-control" id="" aria-describedby="">
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-md-6 form-group padding-5">
                        <input type="text" placeholder="Business Location" class="form-control" id="" aria-describedby="">
                    </div>
                    <div class="col-md-6 form-group padding-5">
                        <input type="text" placeholder="City" class="form-control" id="" aria-describedby="">
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-md-6 form-group padding-5">
                        <input type="text" placeholder="Street Address" class="form-control" id="" aria-describedby="">
                    </div>
                    <div class="col-md-6 form-group padding-5">
                        <input type="text" placeholder="Postal Code" class="form-control" id="" aria-describedby="">
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-md-6 form-group padding-5">
                        <input type="text" placeholder="Website" class="form-control" id="" aria-describedby="">
                    </div>
                    <div class="col-md-6 form-group padding-5">
                        <input type="text" placeholder="About" class="form-control" id="" aria-describedby="">
                    </div>
                </div>
                <a onclick="Step3()" class="btn btn-lg  col-md-12 mb-3 SubmitBtn">Next</a>

            </div>
            <div class="Step3 StepContainer">
                <div class="row m-0">
                    <div class="col-md-6 form-group padding-5">
                        <input type="Password" placeholder="Password" class="form-control" id="" aria-describedby="">
                    </div>
                    <div class="col-md-6 form-group padding-5">
                        <input type="Password" placeholder="Confirm Password" class="form-control" id="" aria-describedby="">
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                        <label class="custom-control-label" for="customControlAutosizing">Accepting terms and Conditions  </label>
                    </div>
                </div>
                <a href="index.html" class="btn btn-lg  col-md-12 mb-3 SubmitBtn">Sign Up</a>

            </div>


        </form> 
        <div class="col-md-12">
        <p  class="lead text-white text-center mt-3 mb-3">Alredy User ?<a href="Login.html" >Sign in</a></p>

          </div>
    </div>
</div>
    <script>
        function Step2() {
            $(".StepPart2").addClass("active");
            $(".StepContainer").hide();
            $(".Step2").show();
        }
        function Step3() {
            $(".StepPart3").addClass("active");
            $(".StepContainer").hide();
            $(".Step3").show();
        }
    </script>
@endsection