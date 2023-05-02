<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ledthanhdat.vn/html/furgan/product-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Apr 2023 16:54:05 GMT -->
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
        <h1 class="page-title">Product Layout</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="{{url('/')}}"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Product Layout</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main main-container no-sidebar">

    <div class="section-001">
        <div class="container">
            <div class="furgan-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">All Products</h3>
                </div>
            </div>
            <div class="furgan-products style-04">
                <div class="response-product product-list-grid row auto-clear equal-container better-height ">
                    <div class="product-item best-selling style-04 rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-ts-6 post-25 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-specials product_tag-light product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-top tooltip-all-top">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#">
                                    <img class="img-responsive"
                                         src="{{url('/public/assets/images/apro151-1-270x350.jpg')}}"
                                         alt="Office Chair" width="270" height="350">
                                </a>
                            </div>
                            <div class="product-info">
                                <h3 class="product-name product_title">
                                    <a href="#">Office Chair</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- OWL Products -->
                <div class="shop-all">
                    <a target=" _blank" href="{{url('/categories')}}">See By Categories</a>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
