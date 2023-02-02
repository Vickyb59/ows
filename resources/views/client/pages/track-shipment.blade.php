@php

$page_name = 'Track a Shipment';
$page_parent = '';
$page_description = 'Manage your shipping online and quickly print labels, track packages, and find details about our services that fit your needs...';

@endphp

@extends('client.front_master')
@section('main')

<main>

    <!-- breadcrumb-area -->
    <div class="breadcrumb-area track-shipment-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="dots"></li>
                                <li class="breadcrumb-item"><a href="{{route ('home.page') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Track Shipment</li>
                                <li class="dots2"></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- support-area -->
    <div class="support-area tracking-area support-bg pt-110 pb-120 plr-20">
        <div class="container tracking-details-area">
            <div class="row">
                <div class="col-xl-7 col-lg-10">                            
                    <div class="s-tracking-section-title mb-20">
                        <h2>ENTER THE CONSIGNMENT NO.</h2>
                        @if(count($errors))
                            @foreach ($errors->all() as $error)
                            <p class="alert alert-danger alert-dismissible fade show"> {{ $error}} </p>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10">
                    <div class="support-form text-center">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-12 track-form">
                                    <input type="text" name="trackingId" placeholder="Enter Tracking Number *">
                                    <button type="submit"  name="trackItem" class="btn red-btn">Track Shipment</button>
                                </div>
                            </div>
                            <div class="track-example">
                                <label>Ex: 12345</label>
                            </div>                                    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- support-area-end -->
    

</main>

@endsection