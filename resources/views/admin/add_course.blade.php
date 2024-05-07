@extends('admin.layouts.app')
@section('pageTitle', 'Add Courses')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">@yield('pageTitle')</h3>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('admin.courses.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Display validation errors -->
                    @if ($errors->any())
                        <div class="bg-red-200 text-red-800 p-4 rounded mb-4">
                            <strong>Validation Error:</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="courseName" class="form-label">Course Name</label>
                                <input type="text" id="courseName" name="courseName" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" id="image" name="image" accept="image/*" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="boxInfo" class="form-label">Box Info</label>
                                <textarea id="boxInfo" name="boxInfo" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="detailImage" class="form-label">Detail Image</label>
                                <input type="file" id="detailImage" name="detailImage" accept="image/*"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="highlightContent" class="form-label">Highlight Content</label>
                                <textarea id="highlightContent" name="highlightContent" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="heading" class="form-label">Heading</label>
                                <input type="text" id="heading" name="heading" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="details1" class="form-label">Details 1</label>
                                <textarea id="details1" name="details1" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="details2" class="form-label">Details 2</label>
                                <textarea id="details2" name="details2" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="startDate" class="form-label">Start Date</label>
                                <input type="date" id="startDate" name="startDate" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="yearsOld" class="form-label">Years Old</label>
                                <input type="text" id="yearsOld" name="yearsOld" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="classSize" class="form-label">Class Size</label>
                                <input type="text" id="classSize" name="classSize" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="carryTime" class="form-label">Carry Time</label>
                                <input type="text" id="carryTime" name="carryTime" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="coursesDuration" class="form-label">Courses Duration</label>
                                <input type="text" id="coursesDuration" name="coursesDuration" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="classTime" class="form-label">Class Time</label>
                                <input type="text" id="classTime" name="classTime" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="fee" class="form-label">Fee</label>
                                <input type="text" id="fee" name="fee" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
