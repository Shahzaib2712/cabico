<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ledthanhdat.vn/html/furgan/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Apr 2023 16:54:13 GMT -->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/public/assets/images/favicon.png')}}"/>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600,600i,700,700i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('/public/assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('/public/assets/css/animate.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('/public/assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('/public/assets/css/chosen.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('/public/assets/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('/public/assets/css/jquery.scrollbar.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('/public/assets/css/lightbox.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('/public/assets/css/magnific-popup.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('/public/assets/css/slick.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('/public/assets/fonts/flaticon.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('/public/assets/css/megamenu.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('/public/assets/css/dreaming-attribute.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('/public/assets/css/style.css')}}"/>
    <title>Furgan - HTML Template </title>
</head>
<body>
    @extends('frontend.layouts.main')
    @section('main-container')

<div class="banner-wrapper has_background">
    <img src="{{url('/public/assets/images/banner-for-all2.jpg')}}"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Contact</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index-2.html"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Contact</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="site-main main-container no-sidebar">
    <div class="section-041">
        <div class="container">
            <div class="furgan-google-maps" id="furgan-google-maps" data-hue="" data-lightness="1" data-map-style="2"
                 data-saturation="-99" data-longitude="-73.985130" data-latitude="40.758896" data-pin-icon=""
                 data-zoom="14" data-map-type="ROADMAP"></div>
        </div>
    </div>
    <div class="section-042">
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-xl-1 col-xl-10 col-lg-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="az_custom_heading">WP SHOP THEME</h4>
                            <p>3100 West Cary Street Richmond, Virginia 23221<br>
                                P: 804.355.4383 F: 804.367.7901</p>
                            <h4 class="az_custom_heading">Store Hours</h4>
                            <p>Monday-Saturday 11am-7pm ET<br>
                                Sunday 11am-6pm ET</p>
                            <h4 class="az_custom_heading">Specialist Hours</h4>
                            <p>Monday-Friday 9am-5pm ET</p>
                        </div>
                        <div class="col-md-6">
                            <div class="wpcf7">
                                <form action="datainsert" method="POST" class="pq-contactform pq-applyform" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" id="first-name" class="form-control" name="user_name" placeholder="Your Name" required>
                                            @error('user_name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" id="phone-number" class="form-control" name="user_contact" placeholder="Cell Phone" required>
                                            @error('user_contact')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" id="e-mail" class="form-control my-3" name="user_email" placeholder="Email" required>
                                            @error('user_email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input type="date" id="date" class="form-control my-3" name="user_date" required>
                                            @error('user_date')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea id="message" rows="5" cols="10" name="user_message" class="my-3"  placeholder="Your Message" required></textarea>
                                            @error('user_message')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                        </div>
                                        <div class="col-lg-12">
                                                    <button type="submit" class="btn">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
