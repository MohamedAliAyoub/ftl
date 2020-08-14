@extends('layouts.dashboard.app')
@section('content')

	<!-- Start The "Marketplace Congratulations" Page -->
        <section class="marketplace-succ text-center container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-md-10">
                    <header>
                        <img src="{{asset('dashboard/images/market-cong.png')}}" alt="">
                    </header>
                    <article class="mt-4">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled
                        </p>
                        <div class="btns mt-4">
                           <a href="{{url('/')}}"> <button class="home hvr-float-shadow">GO TO HOMEPAGE</button></a>
                            <button class="hvr-float-shadow">CONTACT US</button>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- End The "Marketplace Congratulations" Page -->
@endsection