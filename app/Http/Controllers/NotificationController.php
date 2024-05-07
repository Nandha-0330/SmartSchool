<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function create()
    {
        $courses = Course::all();
        return view('admin.create_notification', compact('courses'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:event,notification',
            'name' => 'required|string',
            'course_id' => 'required|exists:courses,id',
        ]);

        Notification::create([
            'type' => $request->input('type'),
            'name' => $request->input('name'),
            'course_id' => $request->input('course_id'),
        ]);

        return redirect()->route('dashboard')->with('success', 'Notification created successfully!');
    }


    public function destroy(Notification $notification_id)
    {
        $notification_id->delete();
        return redirect()->route('dashboard')->with('success', 'Notification deleted successfully');
    }
}
