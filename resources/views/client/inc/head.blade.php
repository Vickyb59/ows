@php

@endphp

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $page_name }} | {{ config('global.settings.siteTitle') }}</title>
    <meta name="description" content="{{ $page_description }}">
    <meta name="keywords" content="{{ config('global.settings.siteTitle') }} shipping, {{ config('global.settings.siteTitle') }}, package tracking, shipping calculator">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('front') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('front') }}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/css/aos.css">
    <link rel="stylesheet" href="{{ asset('front') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('front') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('front') }}/css/meanmenu.css">
    <link rel="stylesheet" href="{{ asset('front') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('front') }}/css/default.css">
    @if($page_name == 'Tracking')
        <link rel="stylesheet" href="{{ asset('front') }}/css/stylestracking.css">
    @else
        <link rel="stylesheet" href="{{ asset('front') }}/css/style.css">
    @endif

    <link rel="stylesheet" href="{{ asset('front') }}/css/responsive.css">
    <link rel="stylesheet" href="{{ asset('front') }}/css/custom.css">

    @if($page_name == 'Tracking')
        <link rel="stylesheet" href="{{ asset('front') }}/css/tracking.css">
    @endif
    
</head>