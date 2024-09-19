<!-- resources/views/dashboard.blade.php -->
@extends('layouts.adminlayout')

@section('title', 'Admin')

@section('content')

       
        <div class="row dashboard-header mb-4">
            <div class="col-md-8">
                <h1 class="text-primary">Welcome, Benjamin!</h1>
                <p class="text-muted">Here is an overview of your dashboard.</p>
            </div>
            <div class="col-md-4 d-flex justify-content-end align-items-center">
                <input type="text" class="form-control w-75" placeholder="Search...">
                <button class="btn btn-primary ms-2">Search</button>
            </div>
        </div>
        <!-- Overview Section -->
        <div class="row mb-4">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card overview-card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Total Students</h5>
                        <p class="card-subtitle mb-2 text-muted">[Number]</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card overview-card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Total Courses</h5>
                        <p class="card-subtitle mb-2 text-muted">[Number]</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card overview-card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Upcoming Events</h5>
                        <p class="card-subtitle mb-2 text-muted">[List]</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card overview-card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Recent Notifications</h5>
                        <p class="card-subtitle mb-2 text-muted">[List]</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Metrics Section -->
        <div class="row mb-4">
            <div class="col-lg-6 mb-4">
                <div class="card metric-card">
                    <div class="card-body">
                        <h5 class="card-title">Student Performance</h5>
                        <!-- You can integrate a chart library like Chart.js here -->
                        <div id="studentPerformanceChart" style="height: 250px;">[Chart]</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card metric-card">
                    <div class="card-body">
                        <h5 class="card-title">Course Performance</h5>
                        <!-- You can integrate a chart library like Chart.js here -->
                        <div id="coursePerformanceChart" style="height: 250px;">[Chart]</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions Section -->
        <div class="row mb-4">
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Quick Actions</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="">Add New Student</a></li>
                            <li class="list-group-item"><a href="">Create New Course</a></li>
                            <li class="list-group-item"><a href="">View Calendar</a></li>
                            <li class="list-group-item"><a href="">Check Messages</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card notification-card">
                    <div class="card-body">
                        <h5 class="card-title">Recent Notifications</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Notification 1</li>
                            <li class="list-group-item">Notification 2</li>
                            <li class="list-group-item">Notification 3</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
@endsection
