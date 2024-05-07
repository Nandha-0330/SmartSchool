<!-- resources/views/courses/index.blade.php -->
@extends('admin.layouts.app')
@section('pageTitle', 'Admin Courses')
@section('content')

    <head>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <div class="container mx-auto mt-8">
        @if (session('success'))
                <div class="bg-green-200 text-green-800 p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif


        <!-- Courses Table -->
        <table class="min-w-full bg-white border border-gray-300 rounded">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">S/N</th>
                    <th class="py-2 px-4 border-b">Course Name</th>
                    <th class="py-2 px-4 border-b">Action</th>
                </tr>
            </thead>
            @foreach($Courses as $index => $Course)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $index + 1 }}</td>
                        <td class="py-2 px-4 border-b">{{ $Course->courseName }}</td>
                        <td class="py-2 px-4 border-b">
                            <form action="{{ route('admin.courses.destroy', $Course->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        </table>

        <table class="min-w-full bg-white border border-gray-300 rounded">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">S/N</th>
                    <th class="py-2 px-4 border-b">Notification </th>
                    <th class="py-2 px-4 border-b">Type </th>
                    <th class="py-2 px-4 border-b">Action</th>
                </tr>
            </thead>
            @foreach($Notifications as $index => $Notifications)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $index + 1 }}</td>
                        <td class="py-2 px-4 border-b">{{ $Notifications-> name }}</td>
                        <td class="py-2 px-4 border-b">{{ $Notifications-> type }}</td>
                        <td class="py-2 px-4 border-b">
                            <form action="{{ route('admin.notification.destroy', $Notifications->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        </table>
    </div>


@endsection
