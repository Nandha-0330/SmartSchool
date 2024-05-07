@extends('layouts.app')
@section('pageTitle', 'SmartTitle')
@section('content')
<div class="page-content">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-dark" style="background-image:url({{ asset('build/images/banner/bnr2.png')}});">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Courses Details</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
                        <li>Home</li>
                        <li>Courses Details</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- inner page banner END -->
    <div class="content-block">
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 m-b15">
                        <div class="classes-details">
                            <div class="class-media m-b20">
                                <img class="radius-sm" src="{{ asset('storage/' . $course->detailImagePath) }}" alt="{{ $course->courseName }}">

                            </div>
                            <div class="class-info">
                                <div class="dlab-post-title ">
                                    <h2 class="post-title m-t0"><a href="classes.html">{{ $course->heading }}</a></h2>
                                </div>

                                <div class="dlab-post-text">
                                    <p>{{ $course->details1 }}</p>

                                    <blockquote>{{ $course->highlightContent }}</blockquote>

                                    <p>{{ $course->details2 }}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="details-tbl widget">
                            <ul class="class-details">
                                <li>
                                    <div class="name"><i class="la la-clock-o"></i>Start Date</div>
                                    <div class="info">{{ $course->startDate }}</div>
                                </li>
                                <li>
                                    <div class="name"><i class="la la-calendar-check-o"></i>Years Old</div>
                                    <div class="info">{{$course->yearsOld}}Years</div>
                                </li>
                                <li>
                                    <div class="name"><i class="la la-arrows"></i>Class Size</div>
                                    <div class="info">{{$course->classSize}} Adults</div>
                                </li>
                                <li>
                                    <div class="name"><i class="la la-hourglass"></i>Carry Time</div>
                                    <div class="info">{{$course->carryTime}} Days</div>
                                </li>
                                <li>
                                    <div class="name"><i class="la la-history"></i>Coures Duration</div>
                                    <div class="info">{{$course->coursesDuration}} Month</div>
                                </li>
                                <li>
                                    <div class="name"><i class="la la-clock-o"></i>Class Time</div>
                                    <div class="info">{{$course->classTime}}</div>
                                </li>
                                <li>
                                    <div class="name"><i class="la la-user"></i>Tution Free</div>
                                    <div class="info">₹ {{$course->fee}}</div>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content END-->

@endsection
