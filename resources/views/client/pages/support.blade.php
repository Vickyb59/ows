@php

$page_name = 'Contact Us';
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
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                        <h2>support</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- support-area -->
    <div class="support-area support-bg pt-110 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="s-section-title text-center mb-60">
                        <h2>Get In Touch</h2>
                        <p>We understand the importance of approaching each work integrally and believe in the power of simple and easy communication.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="support-form text-center">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="First Name *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Last Name *">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Your E-mail *">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Website">
                                </div>
                            </div>
                            <textarea name="message" id="message" placeholder="Message"></textarea>
                            <button class="btn red-btn">Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- support-area-end -->

    <!-- contact-area -->
    <section class="contact-area primary-bg pt-70 pb-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-box mb-50">
                        <div class="contact-icon mb-30">
                            <img src="{{ asset('front') }}/img/icon/contact_box_icon01.png" alt="img">
                        </div>
                        <div class="contact-content">
                            <h5>Find Location</h5>
                            <span>{{ config('global.settings.address') }}</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-box mb-50">
                        <div class="contact-icon mb-30">
                            <img src="{{ asset('front') }}/img/icon/contact_box_icon03.png" alt="img">
                        </div>
                        <div class="contact-content">
                            <h5>email</h5>
                            <span>{{ config('global.settings.email') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-box mb-50">
                        <div class="contact-icon mb-30">
                            <img src="{{ asset('front') }}/img/icon/contact_box_icon01.png" alt="img">
                        </div>
                        <div class="contact-content">
                            <h5>email informing</h5>
                            <span>{{ config('global.settings.email') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->            

</main>

@endsection