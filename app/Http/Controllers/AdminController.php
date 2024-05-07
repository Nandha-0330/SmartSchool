<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Notification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function dashboard()
    {
        $this->middleware('auth:admin');
        $Courses = Course::all();
        $Notifications = Notification::all();
        return view('admin.dashboard', compact('Courses'),compact('Notifications'));
    }

//     public function login(Request $request)
// {
//     $credentials = $request->only('email', 'password');

//     // Manually check credentials
//     if ($credentials['email'] == 'admin@example.com' && $credentials['password'] == 'password') {
//         // Authentication successful

//         // Store user information in the session
//         Session::put('user', ['email' => $credentials['email']]);

//         return redirect(route('dashboard'));
//     }

//     // Authentication failed
//     return redirect(route('login'))->with('error', 'Invalid credentials');
// }
public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication successful
        return redirect(route('admin.dashboard'));
    }

    // Authentication failed
    return redirect(route('admin.login'))->with('error', 'Invalid credentials');
}


}
