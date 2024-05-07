@extends('layouts.app')
@section('pageTitle', 'SmartTitle')
@section('content')
<!-- Content -->
<div class="page-content">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-dark" style="background-image:url({{ asset('build/images/banner/Bnr.png')}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Our Gallery</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
                        <li>Home</li>
                        <li>Gallery </li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- inner page banner END -->
    <div class="content-block">
        <div class="section-full content-inner bg-gray">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title text-secondry">Gallery of our classes</h2>
                    <p class="ext">We provide three classes with nine to twenty children each aged twelve months to six years of age.</p>
                </div>
                <div class="row">
                    <div class="clearfix col-md-12 p-lr0" id="lightgallery">
                        <ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery mfp-gallery masonry-gallery">
                            <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                <div class="dlab-box frame-box m-b30">
                                    <div class="dlab-thum dlab-img-overlay1 ">
                                        <a href="javascript:void(0);">
                                            <img src="images/gallery/masonary/pic1.jpg" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <span data-exthumbimage="images/gallery/masonary/pic1.jpg" data-src="images/gallery/masonary/pic1.jpg" class="check-km" title="Image 1 Title will come here">
                                                    <i class="fa fa-search icon-bx-xs"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                <div class="dlab-box frame-box m-b30">
                                    <div class="dlab-thum dlab-img-overlay1">
                                        <a href="javascript:void(0);">
                                            <img src="images/gallery/masonary/pic2.jpg" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <span data-exthumbimage="images/gallery/masonary/pic2.jpg" data-src="images/gallery/masonary/pic2.jpg" class="check-km" title="Image 2 Title will come here">
                                                    <i class="fa fa-search icon-bx-xs"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                                <div class="dlab-box frame-box m-b30">
                                    <div class="dlab-thum dlab-img-overlay1">
                                        <a href="javascript:void(0);">
                                            <img src="images/gallery/masonary/pic3.jpg" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <span data-exthumbimage="images/gallery/masonary/pic3.jpg" data-src="images/gallery/masonary/pic3.jpg" class="check-km" title="Image 3 Title will come here">
                                                    <i class="fa fa-search icon-bx-xs"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                <div class="dlab-box frame-box m-b30">
                                    <div class="dlab-thum dlab-img-overlay1">
                                        <a href="javascript:void(0);">
                                            <img src="images/gallery/masonary/pic4.jpg" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <span data-exthumbimage="images/gallery/masonary/pic4.jpg" data-src="images/gallery/masonary/pic4.jpg" class="check-km" title="Image 4 Title will come here">
                                                    <i class="fa fa-search icon-bx-xs"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                <div class="dlab-box frame-box m-b30">
                                    <div class="dlab-thum dlab-img-overlay1">
                                        <a href="javascript:void(0);">
                                            <img src="images/gallery/masonary/pic5.jpg" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <span data-exthumbimage="images/gallery/masonary/pic5.jpg" data-src="images/gallery/masonary/pic5.jpg" class="check-km" title="Image 5 Title will come here">
                                                    <i class="fa fa-search icon-bx-xs"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn " data-wow-delay="0.6s">
                                <div class="dlab-box frame-box m-b30">
                                    <div class="dlab-thum dlab-img-overlay1">
                                        <a href="javascript:void(0);">
                                            <img src="images/gallery/masonary/pic6.jpg" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <span data-exthumbimage="images/gallery/masonary/pic6.jpg" data-src="images/gallery/masonary/pic6.jpg" class="check-km" title="Image 6 Title will come here">
                                                    <i class="fa fa-search icon-bx-xs"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                <div class="dlab-box frame-box m-b30">
                                    <div class="dlab-thum dlab-img-overlay1 ">
                                        <a href="javascript:void(0);">
                                            <img src="images/gallery/masonary/pic1.jpg" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <span data-exthumbimage="images/gallery/masonary/pic1.jpg" data-src="images/gallery/masonary/pic1.jpg" class="check-km" title="Image 7 Title will come here">
                                                    <i class="fa fa-search icon-bx-xs"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                <div class="dlab-box frame-box m-b30">
                                    <div class="dlab-thum dlab-img-overlay1">
                                        <a href="javascript:void(0);">
                                            <img src="images/gallery/masonary/pic2.jpg" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <span data-exthumbimage="images/gallery/masonary/pic2.jpg" data-src="images/gallery/masonary/pic2.jpg" class="check-km" title="Image 8 Title will come here">
                                                    <i class="fa fa-search icon-bx-xs"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                                <div class="dlab-box frame-box m-b30">
                                    <div class="dlab-thum dlab-img-overlay1">
                                        <a href="javascript:void(0);">
                                            <img src="images/gallery/masonary/pic3.jpg" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <span data-exthumbimage="images/gallery/masonary/pic3.jpg" data-src="images/gallery/masonary/pic3.jpg" class="check-km" title="Image 9 Title will come here">
                                                    <i class="fa fa-search icon-bx-xs"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                <div class="dlab-box frame-box m-b30">
                                    <div class="dlab-thum dlab-img-overlay1">
                                        <a href="javascript:void(0);">
                                            <img src="images/gallery/masonary/pic7.jpg" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <span data-exthumbimage="images/gallery/masonary/pic7.jpg" data-src="images/gallery/masonary/pic7.jpg" class="check-km" title="Image 10 Title will come here">
                                                    <i class="fa fa-search icon-bx-xs"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                <div class="dlab-box frame-box m-b30">
                                    <div class="dlab-thum dlab-img-overlay1">
                                        <a href="javascript:void(0);">
                                            <img src="images/gallery/masonary/pic8.jpg" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <span data-exthumbimage="images/gallery/masonary/pic8.jpg" data-src="images/gallery/masonary/pic8.jpg" class="check-km" title="Image 11 Title will come here">
                                                    <i class="fa fa-search icon-bx-xs"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="web design card-container col-lg-4 col-md-6 col-sm-6 wow zoomIn " data-wow-delay="0.6s">
                                <div class="dlab-box frame-box m-b30">
                                    <div class="dlab-thum dlab-img-overlay1">
                                        <a href="javascript:void(0);">
                                            <img src="images/gallery/masonary/pic9.jpg" alt="">
                                        </a>
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <span data-exthumbimage="images/gallery/masonary/pic9.jpg" data-src="images/gallery/masonary/pic9.jpg" class="check-km" title="Image 12 Title will come here">
                                                    <i class="fa fa-search icon-bx-xs"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content END-->
@endsection
