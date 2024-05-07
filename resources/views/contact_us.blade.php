@extends('layouts.app')
@section('pageTitle', 'SmartTitle')
@section('content')

<!-- Content -->
<div class="page-content">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-dark" style="background-image:url({{ asset('build/images/banner/Banner1.png')}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Contact Us</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
                        <li>Home</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- inner page banner END -->
    <div class="content-block">
        <div class="section-full bg-gray">
            <div class="container">
                <div class="row align-items-center content-inner">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="icon-bx-wraper m-b30 left">
                            <div class="icon-md m-b20 m-t5">
                                <a href="javascript:void(0)" class="icon-cell text-blue">
                                    <i class="ti-headphone-alt"></i>
                                </a>
                            </div>
                            <div class="icon-content">
                                <h4 class="dlab-tilte m-b5">Phone</h4>
                                <p>Phone 01:(+032) 3456 7890 <br/> Phone 02: (+032) 3427 7670</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="icon-bx-wraper m-b30 left">
                            <div class="icon-md m-b20 m-t5">
                                <a href="javascript:void(0)" class="icon-cell text-green">
                                    <i class="ti-location-pin"></i>
                                </a>
                            </div>
                            <div class="icon-content">
                                <h4 class="dlab-tilte m-b5">Address</h4>
                                <p>Spring Store London Oxford Street, 012 United Kingdom</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="icon-bx-wraper m-b30 left">
                            <div class="icon-md m-b20 m-t5">
                                <a href="javascript:void(0)" class="icon-cell text-orange">
                                    <i class="ti-email"></i>
                                </a>
                            </div>
                            <div class="icon-content">
                                <h4 class="dlab-tilte m-b5">Email</h4>
                                <p>info@example.com <br/> info@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row content-inner-4">
                    <div class="banner-map col-md-12">
                        <div id="map" style="width:100%;height:600px;"></div>
                    </div>
                </div>
                <div class="row contact-box content-inner-5">
                    <div class="section-head text-center col-md-12">
                        <h2 class="title text-secondry">Contact Me</h2>
                        <p class="ext m-b0">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8</p>
                    </div>
                    <div class="dzFormMsg"></div>
                    <form method="post" class="dzForm col-md-12" action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <input name="dzName" type="text" required class="form-control" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <input name="dzEmail" type="email" class="form-control" required  placeholder="Your Email Address" >
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <input name="dzphone" type="text" required class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <textarea name="dzMessage" rows="4" class="form-control" required placeholder="Your message here"></textarea>
                                </div>
                            </div>
                            {{-- <div class="col-md-12 col-sm-12">
                                <div class="form-group recaptcha-box">
                                    <div class="g-recaptcha" data-sitekey="<!-- Put reCaptcha Site Key -->" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                    <input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
                                </div>
                            </div> --}}
                            <div class="col-md-12 col-sm-12 text-center">
                                <button name="submit" type="submit" value="Submit" class="btn radius-xl btn-lg">Send Message<span></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content END-->

@endsection
