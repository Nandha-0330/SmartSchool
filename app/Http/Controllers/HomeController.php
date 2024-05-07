<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Notification;

class HomeController extends Controller
{
    public function index()
    {
        $Notifications = Notification::all();
        $Notification_s = Notification::all();
        return view('index',compact('Notifications'),compact('Notification_s'));
    }
    public function about_us()
    {
        return view('about');
    }
    public function courses()
    {
        $courses = Course::all(); // Fetch all courses (you may adjust this based on your requirements)
        return view('courses', compact('courses'));
    }
    public function contact_us()
    {
        return view('contact_us');
    }
    public function teacher_page()
    {
        return view('teachers');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function login()
    {
        return view('admin.login');
    }


}
