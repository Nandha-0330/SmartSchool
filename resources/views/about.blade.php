@extends('layouts.app')
@section('pageTitle', 'SmartTitle')
@section('content')
<div class="page-content">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-dark" style="background-image:url({{ asset('build/images/banner/Banner1.png')}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">About Us</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                    <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
                        <li>Home</li>
                        <li>About Us</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- inner page banner END -->
    <div class="content-block">
        <div class="section-full bg-white content-inner-2" style="background-image:url(images/pattern/pt1.png);">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title">World Class Facilities</h2>
                    <p class="ext">Ask The Question, Learn With Perfection, Lead With Conviction</p>
                </div>
                <div class="row align-items-center about-bx2">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <img src="images/about/about-2.jpg" class="img" alt=""/>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="about-box">
                            <h3 class="title"> Ask whatever you want </h3>
                            <p class="ext">Get your exam related doubts and questions answered by experienced and qualified faculty </p>
                            <ul class="list-check">
                                <li>Stuck with subject related queries?</li>
                                <li>Confused among lots of career choices?</li>
                                <li>Looking for expert guidance in studies?</li>
                                <li>Want latest notification about exams?</li>
                            </ul>
                            <div class="about-mamber">
                                <img src="images/testimonials/pic2.jpg" class="user" alt=""/>
                                <img src="images/sign.png" class="sign" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-full bg-white content-inner-2 about-content bg-img-fix" style="background-image:url(images/background/bg5.jpg);">
            <div class="about-overlay-box"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 wow fadeIn" data-wow-delay="0.2s"  data-wow-duration="2s">
                        <div class="section-head m-b0">
                            <h2 class="title text-yellow">Education from birth<br>begins with us</h2>
                            <p class="ext text-white m-b0">Our children's academy, together with one of the oldest private schools, created a joint school preparation project. The goal of the project is the harmonious development, socializationfor admission to the best educational institutions of our city.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12"></div>
                </div>
            </div>
        </div>
        <div class="section-full content-inner bg-white" style="background-image:url(images/background/bg1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 student-bx">
                        <div class="section-head">
                            <h2 class="title">Student Testimonial</h2>
                            <div class="dlab-separator bg-primary"></div>
                        </div>
                        <div class="client-box2">
                            <div class="client-carousel-2 owl-carousel owl-theme">
                                <div class="item">
                                    <div class="client-box style-2">
                                        <div class="testimonial-pic">
                                            <img src="images/testimonials/pic1.jpg" alt=""/>
                                        </div>
                                        <div class="testimonial-text">
                                            <p>My younger son returns very happy with all activities happening at your school every day. I am glad that my son is being taught in your school. You have the motst qualified teachers.</p>
                                            <div class="testimonial-detail clearfix">
                                                <h5 class="testimonial-name m-t0 m-b5">Mr. George</h5>
                                                <span>KVS - PRT 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-box style-2">
                                        <div class="testimonial-pic">
                                            <img src="images/testimonials/pic2.jpg" alt=""/>
                                        </div>
                                        <div class="testimonial-text">
                                            <p>My younger son returns very happy with all activities happening at your school every day. I am glad that my son is being taught in your school. You have the motst qualified teachers.</p>
                                            <div class="testimonial-detail clearfix">
                                                <h5 class="testimonial-name m-t0 m-b5">Mr. Aliyah</h5>
                                                <span>KVS - PRT 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="section-head">
                            <h2 class="title">Meet our Teachers</h2>
                            <div class="dlab-separator bg-primary"></div>
                        </div>
                        <div class="row sp20">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="team-box">
                                    <div class="media">
                                        <img src="images/team/pic8.jpg" alt="">
                                        <div class="media-info">
                                            <h4 class="title"><a href="teachers-details.html">Amy</a></h4>
                                            <span>MBA</span>
                                        </div>
                                    </div>
                                    <div class="team-info">
                                        <h4 class="title"><a href="teachers-details.html">Amy</a></h4>
                                        <span>Teacher</span>
                                        <p>We have an excellent teacher to child ratio at our Kindergarten to ensure that each child receives the attention he or she needs</p>
                                        <ul class="list-inline">
                                            <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="team-box">
                                    <div class="media">
                                        <img src="images/team/pic7.jpg" alt="">
                                        <div class="media-info">
                                            <h4 class="title"><a href="teachers-details.html">Alina</a></h4>
                                            <span>M.Com</span>
                                        </div>
                                    </div>
                                    <div class="team-info">
                                        <h4 class="title"><a href="teachers-details.html">Alina</a></h4>
                                        <span>M.Com</span>
                                        <p>We have an excellent teacher to child ratio at our Kindergarten to ensure that each child receives the attention he or she needs</p>
                                        <ul class="list-inline">
                                            <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="team-box">
                                    <div class="media">
                                        <img src="images/team/pic9.jpg" alt="">
                                        <div class="media-info">
                                            <h4 class="title"><a href="teachers-details.html">William</a></h4>
                                            <span>BBA BCA</span>
                                        </div>
                                    </div>
                                    <div class="team-info">
                                        <h4 class="title"><a href="teachers-details.html">William</a></h4>
                                        <span>BBA BCA</span>
                                        <p>We have an excellent teacher to child ratio at our Kindergarten to ensure that each child receives the attention he or she needs</p>
                                        <ul class="list-inline">
                                            <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-full bg-white content-inner-2 about-content bg-img-fix overlay-black-middle" style="background-image:url(images/background/bg6.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 wow fadeIn about-text" data-wow-delay="0.2s" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeIn;">
                        <div class="text-center">
                            <h4 class="text-white">Join Our New Session</h4>
                            <h2>Call To Enrol Your Child <br/><span class="text-yellow">222 4444 000</span></h2>
                            <a href="https://www.youtube.com/watch?v=Dj6CKxQue7U" class="btn btn-md radius-xl">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-full bg-gray content-inner-2">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title">Our Placement</h2>
                </div>
                <div class="client-logo-bx owl-carousel owl-btn-center-lr owl-btn-3">
                    <div class="item">
                        <div class="client-bx">
                            <img src="images/logo/logo-1.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-bx">
                            <img src="images/logo/logo-2.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-bx">
                            <img src="images/logo/logo-3.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-bx">
                            <img src="images/logo/logo-4.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-bx">
                            <img src="images/logo/logo-5.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-bx">
                            <img src="images/logo/logo-6.jpg" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content END-->
@endsection
