<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\NotificationController;
use App\Models\Notification;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about_us', [HomeController::class, 'about_us'])->name('about');
Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
Route::get('/contact_us', [HomeController::class, 'contact_us'])->name('contact_us');
Route::get('/teachers', [HomeController::class, 'teacher_page'])->name('teachers');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');

Route::post('/contact', [ContactController::class, 'EnquiryForm'])->name('enquiry.submit');
Route::post('/contact_message', [ContactController::class, 'SubmitForm'])->name('contact.submit');


Route::get('/course-details/{id}', [CourseController::class, 'showDetails'])->name('course.details');



Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminController::class, 'login'])->name('checklogin');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    //Course
    Route::get('/courses/form', [CourseController::class, 'showForm'])->name('courses.form');
    Route::post('/courses/store', [CourseController::class, 'store'])->name('admin.courses.store');
    Route::delete('/courses/destroy/{course}', [CourseController::class, 'destroy'])->name('admin.courses.destroy');

    //Notifications
    Route::get('/notifications/create', [NotificationController::class, 'create'])->name('notifications.create');
    Route::post('/notifications/store', [NotificationController::class, 'store'])->name('notifications.store');
    Route::delete('/notifications/destroy/{notification_id}', [NotificationController::class, 'destroy'])->name('admin.notification.destroy');



});
