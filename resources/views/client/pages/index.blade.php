@php

$page_name = 'Home';
$page_parent = '';
$page_description = 'Manage your shipping online and quickly print labels, track packages, and find details about our services that fit your needs...';

@endphp

@extends('client.front_master')
@section('main')

<main>

    <!-- slider-area -->
    @include('client.inc.slider')
    
    <!-- slider-area-end -->

    <!-- category-area -->
    <section class="t-category-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="s-single-cat t-single-cat">
                        <div class="s-cat-icon">
                            <i class="flaticon-cruise"></i>
                        </div>
                        <div class="s-cat-content">
                            <h5><a href="#">Sea Freight</a></h5>
                            <p>We offer so much more than just ocean carriage. We've also developed a comprehensive infrastructure solutions designed to match your needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="s-single-cat t-single-cat">
                        <div class="s-cat-icon">
                            <i class="flaticon-air-freight"></i>
                        </div>
                        <div class="s-cat-content">
                            <h5><a href="#">Air Freight</a></h5>
                            <p>Despite the size and complexity of our business, we've never lost sight of the need to put customers' individual needs at the heart of everything we do.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="s-single-cat t-single-cat">
                        <div class="s-cat-icon">
                            <i class="flaticon-delivery-1"></i>
                        </div>
                        <div class="s-cat-content">
                            <h5><a href="#">Insurance</a></h5>
                            <p>Our strength has always been in developing close teams that want to offer the best service in the industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="s-single-cat t-single-cat">
                        <div class="s-cat-icon">
                            <i class="flaticon-package"></i>
                        </div>
                        <div class="s-cat-content">
                            <h5><a href="#">Forwarding</a></h5>
                            <p>with everything Telixcargo does, we help connect people and improve their lives.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category-area-end -->

    <!-- services-area -->
    <section class="services-area delivery-bg pt-110 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="s-section-title text-center mb-60">
                        <h2>how we help you</h2>
                        <p>International express deliveries; global freight forwarding by air, sea, road and rail; warehousing solutions from packaging, to repairs, to storage; mail deliveries worldwide; and other customized logistic services</p>
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
                            <h2>International Cargo</h2>
                            <h6>{{ config('global.settings.siteTitle') }} is an innovative service</h6>
                        </div>
                        <div class="int-services-content">
                            <p> is a Branch based courier management system. Courier or Parcel Sender will send from a branch. Receiver will receive from destination branch set on sending !</p>
                            <a href="track-shipment" class="btn red-btn">TRACK PARCEL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay-title paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal">Cargo</div>
    </section>
    <!-- services-area-end -->

    <!-- video-area -->
    <section class="video-area video-bg">
        <div class="container">
            <div class="video-overlay s-video-overlay">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-8 order-2 order-lg-0">
                        <div class="video-title">
                            <span>Our Chalanges</span>
                            <h2><span>we never</span> break our promise</h2>
                            <a href="#">more services<span></span></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="video-play">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video-area-end -->

    <!-- choose-area -->
    <section class="choose-area pt-110 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="s-section-title text-center mb-60">
                        <h2>Why should you choose us?</h2>
                        <p>We Continue To Pursue That Same Vision In Today's Complex, Uncertain World, Working Every Day</p>
                    </div>
                </div>
            </div>
            <div class="services-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-choose mb-40">
                            <div class="choose-head">
                                <div class="choose-icon mb-25">
                                    <img src="{{ asset('front') }}/img/icon/choose_img01.png" alt="img">
                                </div>
                                <h3><a href="#">Transparent Pricing</a></h3>
                            </div>
                            <div class="choose-content">
                                <p>The world of international supply chains involves a myriad of unknown risks and challenging regulations.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-choose mb-40">
                            <div class="choose-head">
                                <div class="choose-icon mb-25">
                                    <img src="{{ asset('front') }}/img/icon/choose_img02.png" alt="img">
                                </div>
                                <h3><a href="#">Real-Time Tracking</a></h3>
                            </div>
                            <div class="choose-content">
                                <p>The world of international supply chains involves a myriad of unknown risks and challenging regulations.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-choose mb-40">
                            <div class="choose-head">
                                <div class="choose-icon mb-25">
                                    <img src="{{ asset('front') }}/img/icon/choose_img03.png" alt="img">
                                </div>
                                <h3><a href="#">Warehouse Storage</a></h3>
                            </div>
                            <div class="choose-content">
                                <p>Depending on your product, needs and requirements, we provide professional warehouse activities.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-choose mb-40">
                            <div class="choose-head">
                                <div class="choose-icon mb-25">
                                    <img src="{{ asset('front') }}/img/icon/choose_img04.png" alt="img">
                                </div>
                                <h3><a href="#">Security For Cargo</a></h3>
                            </div>
                            <div class="choose-content">
                                <p>Our facilities meet high security requirements and are certified to the highest local standards.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-choose mb-40">
                            <div class="choose-head">
                                <div class="choose-icon mb-25">
                                    <img src="{{ asset('front') }}/img/icon/choose_img05.png" alt="img">
                                </div>
                                <h3><a href="#">Easy Payment Methods</a></h3>
                            </div>
                            <div class="choose-content">
                                <p>You can make use the easy convenient payment options, listed below, that are available in your country.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-choose mb-40">
                            <div class="choose-head">
                                <div class="choose-icon mb-25">
                                    <img src="{{ asset('front') }}/img/icon/choose_img06.png" alt="img">
                                </div>
                                <h3><a href="#">24/7 Hours Support</a></h3>
                            </div>
                            <div class="choose-content">
                                <p>We enhance our logistics operations by relieving you of the worries associated with freight forwarding.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-area-end -->

    <!-- section-area -->
    
    <!-- section-area-end -->

    <!-- rating-area -->
    <section class="rating-area pt-110 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="s-section-title text-center mb-80">
                        <h2>What customers are thinking?</h2>
                    </div>
                </div>
            </div>
            <div class="rating-wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-customer-rating mb-70">
                            <div class="customer-rating-top">
                                <div class="customer-thumb">
                                    <a href="#"><img src="{{ asset('front') }}/img/images/rating_logo.jpg" alt="img"></a>
                                    <div class="rating-info">
                                        <h6>Overall Rating</h6>
                                        <div class="raising-star mb-15">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h3>5</h3>
                                    </div>
                                    <span>based on 3458 ratings</span>
                                </div>
                            </div>
                            <div class="rating-list">
                                <ul>
                                    <li>
                                        On Time Delivery
                                        <span>4.5</span>
                                        <div class="raising-star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </li>
                                    <li>
                                        Delivery experience
                                        <span>4.5</span>
                                        <div class="raising-star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-customer-rating mb-70">
                            <div class="customer-rating-top">
                                <div class="customer-thumb">
                                    <a href="#"><img src="{{ asset('front') }}/img/images/rating_logo03.jpg" alt="img"></a>
                                    <div class="rating-info">
                                        <h6>Overall Rating</h6>
                                        <div class="raising-star mb-15">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <h3>5</h3>
                                    </div>
                                    <span>based on 3458 ratings</span>
                                </div>
                            </div>
                            <div class="rating-list">
                                <ul>
                                    <li>
                                        On Time Delivery
                                        <span>4.5</span>
                                        <div class="raising-star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </li>
                                    <li>
                                        Delivery experience
                                        <span>4.5</span>
                                        <div class="raising-star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-customer-rating mb-70">
                            <div class="customer-rating-top">
                                <div class="customer-thumb">
                                    <a href="#"><img src="{{ asset('front') }}/img/images/rating_logo02.jpg" alt="img"></a>
                                    <div class="rating-info">
                                        <h6>Overall Rating</h6>
                                        <div class="raising-star mb-15">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <h3>4.5</h3>
                                    </div>
                                    <span>based on 3458 ratings</span>
                                </div>
                            </div>
                            <div class="rating-list">
                                <ul>
                                    <li>
                                        On Time Delivery
                                        <span>5</span>
                                        <div class="raising-star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </li>
                                    <li>
                                        Delivery experience
                                        <span>5</span>
                                        <div class="raising-star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-customer-rating mb-70">
                            <div class="customer-rating-top">
                                <div class="customer-thumb">
                                    <a href="#"><img src="{{ asset('front') }}/img/images/rating_logo04.jpg" alt="img"></a>
                                    <div class="rating-info">
                                        <h6>Overall Rating</h6>
                                        <div class="raising-star mb-15">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <h3>4.5</h3>
                                    </div>
                                    <span>based on 3458 ratings</span>
                                </div>
                            </div>
                            <div class="rating-list">
                                <ul>
                                    <li>
                                        On Time Delivery
                                        <span>4.5</span>
                                        <div class="raising-star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </li>
                                    <li>
                                        Delivery experience
                                        <span>4.5</span>
                                        <div class="raising-star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- rating-area-end -->

    <!-- brand-area -->
    
    <!-- brand-area-end -->

    <!-- newsletter -->
    <section class="newsletter-area gray-bg">
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