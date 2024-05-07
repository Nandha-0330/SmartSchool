<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function showForm()
    {
        return view('admin.add_course');
    }

    public function store(Request $request)
    {
        $request->validate([
            'courseName' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'boxInfo' => 'required|string',
            'detailImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'highlightContent' => 'required|string',
            'heading' => 'required|string',
            'details1' => 'required|string',
            'details2' => 'required|string',
            'startDate' => 'required|date',
            'yearsOld' => 'required|integer',
            'classSize' => 'required|integer',
            'carryTime' => 'required|integer',
            'coursesDuration' => 'required|string',
            'classTime' => 'required|string',
            'fee' => 'required|numeric',
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');
        $detailImagePath = $request->file('detailImage')->store('uploads', 'public');

        Course::create([
            'courseName' => $request->input('courseName'),
            'imagePath' => $imagePath,
            'boxInfo' => $request->input('boxInfo'),
            'detailImagePath' => $detailImagePath,
            'highlightContent' => $request->input('highlightContent'),
            'heading' => $request->input('heading'),
            'details1' => $request->input('details1'),
            'details2' => $request->input('details2'),
            'startDate' => $request->input('startDate'),
            'yearsOld' => $request->input('yearsOld'),
            'classSize' => $request->input('classSize'),
            'carryTime' => $request->input('carryTime'),
            'coursesDuration' => $request->input('coursesDuration'),
            'classTime' => $request->input('classTime'),
            'fee' => $request->input('fee'),
        ]);

        return redirect()->route('dashboard')->with('success', 'Course details stored successfully!');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('dashboard')->with('success', 'Course deleted successfully');
    }
    public function showDetails($id)
    {
        $course = Course::findOrFail($id);
        return view('course_details', ['course' => $course]);
    }
}
