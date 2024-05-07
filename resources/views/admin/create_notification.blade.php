@extends('admin.layouts.app')
@section('pageTitle', 'Add Courses')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Create Notification</h2>
                        <!-- resources/views/notifications/create.blade.php -->
                        <form action="{{ route('notifications.store') }}" method="post" class="max-w-md mx-auto p-4 bg-white shadow-md rounded-md">
                            @csrf

                            <div class="mb-4">
                                <label for="type" class="block font-bold mb-1">Select Type:</label>
                                <select name="type" required class="w-full px-3 py-2 border rounded-md">
                                    <option value="" disabled {{ !old('type') ? 'selected' : '' }}>Select a Type</option>
                                    <option value="event" {{ old('type') == 'event' ? 'selected' : '' }}>Event</option>
                                    <option value="notification" {{ old('type') == 'notification' ? 'selected' : '' }}>Notification</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="name" class="block font-bold mb-1">Notification Name:</label>
                                <input type="text" name="name" required value="{{ old('name') }}" class="w-full px-3 py-2 border rounded-md">
                            </div>

                            <div class="mb-4">
                                <label for="course_id" class="block font-bold mb-1">Select Course:</label>
                                <select name="course_id" required class="w-full px-3 py-2 border rounded-md">
                                    <option value="" disabled {{ !old('course_id') ? 'selected' : '' }}>Select a Course</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>
                                            {{ $course->courseName }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:shadow-outline-green active:bg-green-800">
                                Create Notification
                            </button>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
