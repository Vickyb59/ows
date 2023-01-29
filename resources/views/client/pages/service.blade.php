@php

$page_name = 'Service';
$page_parent = '';
$page_description = 'Manage your shipping online and quickly print labels, track packages, and find details about our services that fit your needs...';

@endphp

@extends('client.front_master')
@section('main')

<main>
    <!-- breadcrumb-area -->
    <div class="breadcrumb-area breadcrumb-bg s-breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="dots"></li>
                                <li class="breadcrumb-item"><a href="{{ route('home.page') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Air Freight</li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>Air Freight</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- services-details -->
    <div class="services-details-area pt-120 pb-115">
        <div class="container">
            <div class="services-details-wrap">
                <div class="row">
                    <div class="col-lg-4 order-2 order-lg-0">
                        <aside class="services-sidebar">
                            <div class="services-widget mb-40">
                                <div class="service-widget-title">
                                    <h3>Site Map</h3>
                                </div>
                                <div class="service-cat-list">
                                    <ul>
                                        <li><a href="{{ route('home.page') }}">Home</a></li>
                                        <li class="active"><a href="{{ route('service.page') }}">Service</a></li>
                                        <li><a href="{{ route('about.page') }}">Company</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="services-widget mb-40">
                                <div class="service-doc-list">
                                    <ul>
                                        <li><a href="#">Startesk Company Listing <i class="fas fa-file-pdf"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="services-widget mb-40">
                                <div class="service-sidebar-support">
                                    <h3>Need Support?</h3>
                                    <p>{{ config('global.settings.siteTitle') }} Service</p>
                                    <a href="support" class="btn">contact Us</a>
                                </div>
                            </div>
                            <div class="services-widget">
                                <div class="service-widget-title dark-bg">
                                    <h3>Tags Post</h3>
                                </div>
                                <div class="service-tag-list">
                                    <ul>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Transport</a></li>
                                        <li><a href="#">Logisticsatv</a></li>
                                        <li><a href="#">Transportations</a></li>
                                        <li><a href="#">Who</a></li>
                                        <li><a href="#">Creative</a></li>
                                        <li><a href="#">Cargos</a></li>
                                        <li><a href="#">Delivery</a></li>
                                        <li><a href="#">Warehouse</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-8">
                        <div class="services-details-content">
                            <h4>How It Works?</h4>
                            <p>Our airfreight staff attaches great importance to customizing the booking process for our customers. That's why we strive to find the air freight solution that best suits your needs. We'll ask you when the freight is available, what the required delivery date is, and if there's potential to save on time or cost. Your answers to these and other questions help us decide if you should book the air freight as direct. We'll also see if our sea-air service is a better solution for

                                We have more than twenty years of experience. During that time, we've become expert in freight transportation by air and all its related services. We work closely with all major airlines around the world. Ongoing negotiations ensure that we always have the cargo space we need and the ability to offer you competitive rates - even during the high season.
                                
                                Where possible, we'll erect and dismantle Unit Load Devices (ULDs), reducing significantly the risk of damage to your shipment and saving you time and expense. We can do this because many of our freight stations have their own ground transportation at or around the airport.</p>
                            <div class="services-details-img">
                                <img src="{{ asset('front') }}/img/images/services_details_img.jpg" alt="">
                            </div>
                            <h4>Stats & Charts</h4>
                            <p>Our mix of company-owned and contractor assets allows us to retain optimal levels of control whilst expanding our reach to over 96% of towns in Australia. With 40 years of LTL experience, we are now a trusted LTL freight provider for shippers of all sizes and commodity types.

                                Our LTL service extends to all states and territories, and includes multiple per-week services to places many others only serve occasionally, including Darwin, Alice Springs, Newman, Mt. Isa, Launceston and Burnie.
                                
                                We pride ourselves on providing the best transport and shipping services currently available in Australia. Our skilled personnel, utilising the latest communications, tracking and processing software, combined with decades of experience, ensure all freight is are shipped, trans-shipped and delivered as safely, securely, and promptly as possible.</p>
                            <div class="services-details-list">
                                <ul>
                                    <li><i class="fas fa-arrow-alt-circle-right"></i>Express delivery is an innovative service</li>
                                    <li><i class="fas fa-arrow-alt-circle-right"></i>Logistics scale transport innovative</li>
                                    <li><i class="fas fa-arrow-alt-circle-right"></i>Help transportation and logistics companies</li>
                                </ul>
                            </div>
                            <p>We have more than twenty years of experience. During that time, we've become expert in freight transportation by air and all its related services. We work closely with all major airlines around the world. Ongoing negotiations ensure that we always have the cargo space we need and offer you competitive rates.</p>
                            <blockquote class="services-blockquote">
                                We continue to pursue that same vision in today's complex, uncertain world, working every day to earn our customers' trust! During that time, we've become expert in freight transportation by air and all its related services. We work closely with all major airlines around the world.
                                
                            </blockquote>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services-details-end -->


</main>

@endsection