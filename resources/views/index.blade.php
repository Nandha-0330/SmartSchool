@extends('layouts.app')
@section('pageTitle', 'SmartTitle')
@section('content')
    <div class="action-area marquee-head marquee">
        <ul>
            @foreach ($Notifications as $index => $Notifications)
                <li><a
                        href="{{ route('course.details', ['id' => $Notifications->course_id]) }}">{{ $Notifications->name }}</a>
                </li>
            @endforeach

        </ul>
    </div>
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Slider Banner -->
        <!-- Main Slider -->
        <div class="owl-slider owl-carousel owl-theme owl-btn-center-lr dots-none">
            <div class="item slide-item">
                <div class="slide-item-img"><img src="{{ asset('build/images/banner/bnr.gif') }}" class=""
                        alt="" /></div>
                <div class="slide-content">
                    <div class="slide-content-box container">
                        <div class="slide-content-area">
                            <h2 class="slider-title border">Start Investing in You</h2>
                            <p>With over 1200 courses in 18 subjects, you're guaranteed to find something that's right for
                                you.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item slide-item">
                <div class="slide-item-img"><img src="{{ asset('build/images/banner/Banner2.png') }}" class=""
                        alt="" /></div>
                <div class="slide-content">
                    <div class="slide-content-box container">
                        <div class="slide-content-area">
                            <h2 class="slider-title">Ask, Learn & Lead It</h2>
                            <p>With Better Score, Better Career & Ultimately by Building Better India with the Power of
                                Knowledge</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Banner -->
        <div class="container">
            <div class="banner">
                <p>Join us now and experience greatness!</p>
                <a href="https://candidate.speedexam.net/signin.aspx?site=tti" class="btn btn-success">Sign In</a>
            </div>
        </div>
        <div class="content-block">
            <div class="section-full bg-gray content-inner-2">
                <div class="container">
                    <div class="row">
                        <div class="courses-carousel owl-carousel owl-btn-center-lr owl-btn-3 col-md-12 p-lr0">
                            <div class="item">
                                <div class="courses-bx">
                                    <img src="{{ asset('build/images/courses/railway.png') }}" alt="" />
                                    <h2 class="title">Railway</h2>
                                </div>
                            </div>
                            <div class="item">
                                <div class="courses-bx">
                                    <img src="{{ asset('build/images/courses/banking.png') }}" alt="" />
                                    <h2 class="title">Banking</h2>
                                </div>
                            </div>
                            <div class="item">
                                <div class="courses-bx">
                                    <img src="{{ asset('build/images/courses/bba.png') }}" alt="" />
                                    <h2 class="title">BBA</h2>
                                </div>
                            </div>
                            <div class="item">
                                <div class="courses-bx">
                                    <img src="{{ asset('build/images/courses/law.png') }}" alt="" />
                                    <h2 class="title">LAW</h2>
                                </div>
                            </div>
                            <div class="item">
                                <div class="courses-bx">
                                    <img src="{{ asset('build/images/courses/mba.png') }}" alt="" />
                                    <h2 class="title">MBA</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Us -->
            <div class="section-full bg-white content-inner-2" style="background-image:url({{asset('build/images/pattern/pt1.png')}});">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 class="title">World Class Facilities</h2>
                        <p class="ext">Ask The Question, Learn With Perfection, Lead With Conviction</p>
                    </div>
                    <div class="row align-items-center about-bx2">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <img src="{{asset('build/images/about/about-1.png')}}" class="img" alt="" />
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="about-box">
                                <h3 class="title"> Ask whatever you want </h3>
                                <p class="ext">Get your exam related doubts and questions answered by experienced and
                                    qualified faculty </p>
                                <ul class="list-check">
                                    <li>Stuck with subject related queries?</li>
                                    <li>Confused among lots of career choices?</li>
                                    <li>Looking for expert guidance in studies?</li>
                                    <li>Want latest notification about exams?</li>
                                </ul>
                                {{-- <div class="about-mamber">
                                    <img src="{{asset('build/images/studentprofile/Student1.png')}}" class="user" alt="" />
                                    <img src="images/sign.png" class="sign" alt="" />
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-full content-inner-2 bg-gray">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="action-box">
                                <div class="head">
                                    <h4 class="title">Notification</h4>
                                </div>
                                <div class="action-area marquee1">
                                    <ul>
                                        @foreach ($Notification_s as $index => $Notifications)
                                            @if ($Notifications->type == 'notification')
                                                <li><a
                                                        href="{{ route('course.details', ['id' => $Notifications->course_id]) }}">{{ $Notifications->name }}</a>
                                                </li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="action-box">
                                <div class="head">
                                    <h4 class="title">Events</h4>
                                </div>
                                <div class="action-area">
                                    <ul class="event-bx">
                                        @foreach ($Notification_s as $index => $Notifications)
                                        @if ($Notifications->type == 'event')
                                            <li><a
                                                    href="{{ route('course.details', ['id' => $Notifications->course_id]) }}">{{ $Notifications->name }}</a>
                                            </li>
                                        @endif
                                    @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="section-full content-inner bg-white" style="background-image:url(images/background/bg1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12 student-bx">
                            <div class="section-head">
                                <h2 class="title">Meet Our Students</h2>
                                <div class="dlab-separator bg-primary"></div>
                            </div>
                            <div class="client-carousel owl-carousel owl-theme owl-none">
                                <div class="item">
                                    <div class="client-box">
                                        <div class="testimonial-text">
                                            <p>My younger son returns very happy with all activities happening at your
                                                school every day. I am glad that my son is being taught in your school. You
                                                have the motst qualified teachers in the area! My daughter is very satisfied
                                                with lessons of English and Math – they give her additional impact for
                                                development. Thank you!</p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <div class="testimonial-pic radius">
                                                <img src="{{asset('build/images/studentprofile/Student1.png')}}" width="100" height="100"
                                                    alt="">
                                            </div>
                                            <h5 class="testimonial-name m-t0 m-b5">Mr. Jone Deo</h5>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-box">
                                        <div class="testimonial-text">
                                            <p>My younger son returns very happy with all activities happening at your
                                                school every day. I am glad that my son is being taught in your school. You
                                                have the motst qualified teachers in the area! My daughter is very satisfied
                                                with lessons of English and Math – they give her additional impact for
                                                development. Thank you!</p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <div class="testimonial-pic radius">
                                                <img src="{{asset('build/images/studentprofile/Student2.png')}}" width="100" height="100"
                                                    alt="">
                                            </div>
                                            <h5 class="testimonial-name m-t0 m-b5">Mr. Jone Deo</h5>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-box">
                                        <div class="testimonial-text">
                                            <p>My younger son returns very happy with all activities happening at your
                                                school every day. I am glad that my son is being taught in your school. You
                                                have the motst qualified teachers in the area! My daughter is very satisfied
                                                with lessons of English and Math – they give her additional impact for
                                                development. Thank you!</p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <div class="testimonial-pic radius">
                                                <img src="{{asset('build/images/studentprofile/Student3.png')}}" width="100" height="100"
                                                    alt="">
                                            </div>
                                            <h5 class="testimonial-name m-t0 m-b5">Mr. Jone Deo</h5>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-box">
                                        <div class="testimonial-text">
                                            <p>My younger son returns very happy with all activities happening at your
                                                school every day. I am glad that my son is being taught in your school. You
                                                have the motst qualified teachers in the area! My daughter is very satisfied
                                                with lessons of English and Math – they give her additional impact for
                                                development. Thank you!</p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <div class="testimonial-pic radius">
                                                <img src="{{asset('build/images/studentprofile/Student4.png')}}" width="100" height="100"
                                                    alt="">
                                            </div>
                                            <h5 class="testimonial-name m-t0 m-b5">Mr. Jone Deo</h5>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-box">
                                        <div class="testimonial-text">
                                            <p>My younger son returns very happy with all activities happening at your
                                                school every day. I am glad that my son is being taught in your school. You
                                                have the motst qualified teachers in the area! My daughter is very satisfied
                                                with lessons of English and Math – they give her additional impact for
                                                development. Thank you!</p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <div class="testimonial-pic radius">
                                                <img src="{{asset('build/images/studentprofile/Student5.png')}}" width="100" height="100"
                                                    alt="">
                                            </div>
                                            <h5 class="testimonial-name m-t0 m-b5">Mr. Jone Deo</h5>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-box">
                                        <div class="testimonial-text">
                                            <p>My younger son returns very happy with all activities happening at your
                                                school every day. I am glad that my son is being taught in your school. You
                                                have the motst qualified teachers in the area! My daughter is very satisfied
                                                with lessons of English and Math – they give her additional impact for
                                                development. Thank you!</p>
                                        </div>
                                        <div class="testimonial-detail clearfix">
                                            <div class="testimonial-pic radius">
                                                <img src="{{asset('build/images/studentprofile/Student6.png')}}" width="100" height="100"
                                                    alt="">
                                            </div>
                                            <h5 class="testimonial-name m-t0 m-b5">Mr. Jone Deo</h5>
                                            <span>Student</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="team-box">
                                        <div class="media"><img src="{{asset('build/images/Student/Student1.png')}}" alt=""> </div>
                                        <div class="team-info">
                                            <h4 class="title"><a href="teachers-details.html">John Smith</a></h4>
                                            <span>Teacher</span>
                                            <p>We have an excellent teacher to child ratio at our Kindergarten to ensure
                                                that each child receives the attention he or she needs</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="team-box">
                                        <div class="media"><img src="{{asset('build/images/Student/Student2.png')}}" alt=""> </div>
                                        <div class="team-info">
                                            <h4 class="title"><a href="teachers-details.html">Joe Smith</a></h4>
                                            <span>Teacher</span>
                                            <p>We have an excellent teacher to child ratio at our Kindergarten to ensure
                                                that each child receives the attention he or she needs</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="team-box">
                                        <div class="media"><img src="{{asset('build/images/Student/Student3.png')}}" alt=""> </div>
                                        <div class="team-info">
                                            <h4 class="title"><a href="teachers-details.html">Juan Carlos</a></h4>
                                            <span>Teacher</span>
                                            <p>We have an excellent teacher to child ratio at our Kindergarten to ensure
                                                that each child receives the attention he or she needs</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="team-box">
                                        <div class="media"><img src="{{asset('build/images/Student/Student4.png')}}" alt=""> </div>
                                        <div class="team-info">
                                            <h4 class="title"><a href="teachers-details.html">Mike Jones</a></h4>
                                            <span>Teacher</span>
                                            <p>We have an excellent teacher to child ratio at our Kindergarten to ensure
                                                that each child receives the attention he or she needs</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="team-box">
                                        <div class="media"><img src="{{asset('build/images/Student/Student5.png')}}" alt=""> </div>
                                        <div class="team-info">
                                            <h4 class="title"><a href="teachers-details.html">Jone Doe</a></h4>
                                            <span>Teacher</span>
                                            <p>We have an excellent teacher to child ratio at our Kindergarten to ensure
                                                that each child receives the attention he or she needs</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="team-box">
                                        <div class="media"><img src="{{asset('build/images/Student/Student6.png')}}" alt=""> </div>
                                        <div class="team-info">
                                            <h4 class="title"><a href="teachers-details.html">Harry</a></h4>
                                            <span>Teacher</span>
                                            <p>We have an excellent teacher to child ratio at our Kindergarten to ensure
                                                that each child receives the attention he or she needs</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-full bg-white content-inner-2 enquiry-area"
                style="background-image:url({{asset('build/images/background/bg2.jpg')}});">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <div class="enquiry-bx">
                                <div class="head">
                                    <h2 class="title">Quicky Enquiry</h2>
                                    <p>Please fill the below form.</p>
                                </div>
                                <div class="dzFormMsg"></div>
                                <form method="post" class="dzForm" action="{{ route('enquiry.submit') }}">
                                    @csrf

                                    <input type="hidden" value="Contact" name="dzToDo">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input name="dzName" type="text" required class="form-control"
                                                        placeholder="Your Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input name="dzEmail" type="email" class="form-control" required
                                                        placeholder="Your Email Id">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <textarea name="dzMessage" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-12">
                                        <div class="form-group recaptcha-box">
                                            <div class="input-group">
                                                <div class="g-recaptcha" data-sitekey="<!-- Put reCaptcha Site Key -->" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                                <input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
                                            </div>
                                        </div>
                                    </div> --}}
                                        <div class="col-lg-12">
                                            <button name="submit" type="submit" value="Submit" class="btn">
                                                <span>Submit</span> </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-full bg-gray content-inner-2">
                <div class="container">
                    <div class="client-logo-bx owl-carousel owl-btn-center-lr owl-btn-3">
                        <div class="item">
                            <div class="client-bx">
                                <img src="images/logo/logo-1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-bx">
                                <img src="images/logo/logo-2.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-bx">
                                <img src="images/logo/logo-3.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-bx">
                                <img src="images/logo/logo-4.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-bx">
                                <img src="images/logo/logo-5.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-bx">
                                <img src="images/logo/logo-6.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content END-->
<style>
    .container {
            text-align: center;
        }

        .banner {
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .banner p {
            font-size: 1.5em;
            margin-bottom: 20px;
            color: #333;
        }

        .btn-success {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1em;
            text-decoration: none;
            color: #fff;
            background-color: #28a745;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-success:hover {
            background-color: #218838;
        }
</style>


@endsection
