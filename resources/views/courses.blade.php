@extends('layouts.app')
@section('pageTitle', 'SmartTitle')
@section('content')
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-dark" style="background-image:url({{ asset('build/images/banner/Banner2.png')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Courses</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
                            <li>Home</li>
                            <li>Courses</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- inner page banner END -->
        <div class="content-block">
            <div class="section-full bg-white content-inner"
                style="background-image:url(images/line2.png); background-size:contain;background-repeat: no-repeat;background-position: center;">
                <div class="container">
                    <div class="row">
                        @foreach ($courses as $course)
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                <div class="courses-bx-2 m-b30">
                                    <img src="{{ asset('storage/' . $course->imagePath) }}" alt="{{ $course->courseName }}">
                                    <div class="info">
                                        <h2 class="title"><a
                                                href="{{ route('course.details', ['id' => $course->id]) }}">{{ $course->courseName }}</a>
                                        </h2>
                                        <p>{{ $course->boxInfo }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="courses-bx-2 m-b30">
                                <img src="{{asset('build/images/courses/pic2.jpg')}}" alt="">
                                <div class="info">
                                    <h2 class="title"><a href="course-details">B.Com Classes</a></h2>
                                    <p>IPM/BBA/HM Coaching Programs, We have varieties of programs to make your preparation
                                        convenient and complete</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="courses-bx-2 m-b30">
                                <img src="images/courses/pic3.jpg" alt="">
                                <div class="info">
                                    <h2 class="title"><a href="course-details">Class XII Economics</a></h2>
                                    <p>IPM/BBA/HM Coaching Programs, We have varieties of programs to make your preparation
                                        convenient and complete</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="courses-bx-2 m-b30">
                                <img src="images/courses/pic4.jpg" alt="">
                                <div class="info">
                                    <h2 class="title"><a href="course-details">BBA Classes</a></h2>
                                    <p>IPM/BBA/HM Coaching Programs, We have varieties of programs to make your preparation
                                        convenient and complete</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="courses-bx-2 m-b30">
                                <img src="images/courses/pic5.jpg" alt="">
                                <div class="info">
                                    <h2 class="title"><a href="course-details">B.Com Classes</a></h2>
                                    <p>IPM/BBA/HM Coaching Programs, We have varieties of programs to make your preparation
                                        convenient and complete</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="courses-bx-2 m-b30">
                                <img src="images/courses/pic6.jpg" alt="">
                                <div class="info">
                                    <h2 class="title"><a href="course-details">Class XII Economics</a></h2>
                                    <p>IPM/BBA/HM Coaching Programs, We have varieties of programs to make your preparation
                                        convenient and complete</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="courses-bx-2 m-b30">
                                <img src="images/courses/pic2.jpg" alt="">
                                <div class="info">
                                    <h2 class="title"><a href="course-details">BBA Classes</a></h2>
                                    <p>IPM/BBA/HM Coaching Programs, We have varieties of programs to make your preparation
                                        convenient and complete</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="courses-bx-2 m-b30">
                                <img src="images/courses/pic3.jpg" alt="">
                                <div class="info">
                                    <h2 class="title"><a href="course-details">B.Com Classes</a></h2>
                                    <p>IPM/BBA/HM Coaching Programs, We have varieties of programs to make your preparation
                                        convenient and complete</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="courses-bx-2 m-b30">
                                <img src="images/courses/pic1.jpg" alt="">
                                <div class="info">
                                    <h2 class="title"><a href="course-details">Class XII Economics</a></h2>
                                    <p>IPM/BBA/HM Coaching Programs, We have varieties of programs to make your preparation
                                        convenient and complete</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="pagination-bx rounded pagination-lg clearfix primary">
                                <ul class="pagination justify-content-center">
                                    <li class="previous"><a href="javascript:void(0);"><i class="ti-arrow-left"></i>
                                            Prev</a></li>
                                    <li class="active"><a href="javascript:void(0);">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li><a href="javascript:void(0);">3</a></li>
                                    <li class="next"><a href="javascript:void(0);">Next <i class="ti-arrow-right"></i></a>
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
