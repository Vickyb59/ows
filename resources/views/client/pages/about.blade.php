@php

$page_name = 'About Us';
$page_parent = '';
$page_description = 'Manage your shipping online and quickly print labels, track packages, and find details about our services that fit your needs...';

@endphp

@extends('client.front_master')
@section('main')

<main>
    <!-- breadcrumb-area -->
    <div class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="dots"></li>
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- services-area -->
    <section class="services-area delivery-bg pt-110 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="s-section-title text-center mb-60">
                        <h2>{{ config('global.settings.siteTitle') }}</h2>
                        <p>{{ config('global.settings.siteTitle') }} is a representative logistics operator providing full range of service in the sphere of customs clearance and transport worldwide for any type of cargo.</p>
                    </div>
                </div>
            </div>
            <div class="services-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services mb-30">
                            <div class="services-thumb">
                                <a href="#"><img src="{{ asset('front') }}/img/images/services_img01.jpg" alt="img"></a>
                            </div>
                            <div class="services-content">
                                <div class="services-icon">
                                    <i class="flaticon-shipping-and-delivery"></i>
                                </div>
                                <h3><a href="#">More Control, for Free</a></h3>
                                <span>Delivery Service</span>
                                <p>We ensure our customers' supply chains are fully compliant by our comprehensive practices and programs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services mb-30">
                            <div class="services-thumb">
                                <a href="#"><img src="{{ asset('front') }}/img/images/services_img02.jpg" alt="img"></a>
                            </div>
                            <div class="services-content">
                                <div class="services-icon">
                                    <i class="flaticon-shipping"></i>
                                </div>
                                <h3><a href="#">Expand with E-Commerce</a></h3>
                                <span>Delivery Service</span>
                                <p>The world of international supply chains involves a myriad of unknown risks and challenging regulations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services mb-30">
                            <div class="services-thumb">
                                <a href="#"><img src="{{ asset('front') }}/img/images/services_img03.jpg" alt="img"></a>
                            </div>
                            <div class="services-content">
                                <div class="services-icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <h3><a href="#">More Than Anywhere Shipping</a></h3>
                                <span>Delivery Service</span>
                                <p>We enhance our logistics operations by relieving you of the worries associated with freight forwarding.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="international-services position-relative pb-120 fix">
        <div class="container">
            <div class="services-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-0 order-lg-2">
                        <div class="int-services-img text-center text-lg-right">
                            <img src="{{ asset('front') }}/img/images/int_cargo_img.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="s-section-title mb-30">
                            <h2>Safe, Reliable And Express Logistic & Transport Solutions That Saves Your Time!</h2>
                            <h6>{{ config('global.settings.siteTitle') }} innovative service</h6>
                        </div>
                        <div class="int-services-content">
                            <p>We pride ourselves on providing the best transport and shipping services available allover the world. Our skilled personnel, utilising the latest communications, tracking and processing software, combined with decades of experience! Through integrated supply chain solutions, Heavyshipper drives sustainable competitive advantages to some of The United States largest companies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay-title paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal">Cargo</div>
    </section>
    
    <!-- newsletter -->
    <section class="newsletter-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="newsletter-wrap">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="newsletter-content">
                                    <h4>Newsletter Sign Up</h4>
                                    <span>Notifications our best deals...</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="newsletter-form">
                                    <form action="#">
                                        <input type="email" placeholder="Enter your email...">
                                        <button class="btn">subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-end -->

</main>

@endsection