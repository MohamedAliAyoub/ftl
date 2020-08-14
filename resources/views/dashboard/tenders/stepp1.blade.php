@extends('layouts.dashboard.app')
@section('content')
<article class="marketplace-page mb-5">
	<div class="container">
                <!-- Start The Form -->
                <form method="post" action="/step2">
                	 @csrf()
                    @if(session()->has('error'))
                        <span style="color: red;">{{session('error')}}</span><br><br>
                    @endif
	                    <div class="row">
	                        <div class="form-group col-md-4">
	                        	
	                            <select type="text" placeholder="Product name" name="from_country_id" class="form-control">
	                            	<option value="" >From country id</option>
	                        	@foreach($countries as $country)
	                                <option>{{$country->title}}</option>
	                            @endforeach    
	                            </select>
	                            @error('from_country_id')
	                        <span style="color: red;">{{$message}}</span>
	                        @enderror
	                        </div>
                        <div class="form-group col-md-4">
                            <select type="text" placeholder="Product name" class="form-control">
                                <option>Place of Discharge</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="POL">
                                <label class="custom-control-label" for="POL" style="font-size: 18px; color: #969292;">POL</label>
                            </div>
                            <div class="custom-control custom-checkbox mr-sm-2 mt-1">
                                <input type="checkbox" class="custom-control-input" id="POD">
                                <label class="custom-control-label" for="POD" style="font-size: 18px; color: #969292;">POD</label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" placeholder="Volume / Monthly (Dry)" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" placeholder="Volume / Monthly (Reefer)" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="20D">
                                <label class="custom-control-label" for="20D" style="font-size: 18px; color: #969292;">20D</label>
                            </div>
                            <div class="custom-control custom-checkbox mr-sm-2 mt-1">
                                <input type="checkbox" class="custom-control-input" id="40HQ">
                                <label class="custom-control-label" for="40HQ" style="font-size: 18px; color: #969292;">40HQ</label>
                            </div>
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="20RF">
                                <label class="custom-control-label" for="20RF" style="font-size: 18px; color: #969292;">20RF</label>
                            </div>
                            <div class="custom-control custom-checkbox mr-sm-2 mt-1">
                                <input type="checkbox" class="custom-control-input" id="40RF">
                                <label class="custom-control-label" for="40RF" style="font-size: 18px; color: #969292;">40RF</label>
                            </div>
                        </div>
                        <div class="form-group col-12 mt-5 buttons">
                            <button class="hvr-float-shadow next-button">NEXT</button>
                        </div>
                </form>
                <!-- End The Form -->
         </div>   



            </article>
@endsection