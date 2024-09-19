<!-- resources/views/dashboard.blade.php -->
@extends('layouts.clientlayout')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <!-- Welcome Section -->
    <div class="my-4">
        <h1 class="text-center">
            <span class="typing-animation">Welcome to Your Dashboard!</span>
        </h1>
    </div>

    <!-- Top Courses Section -->
    <div class="my-4">
        <h2 class="mb-4">Top Courses</h2>
        <div class="row">
            <!-- Course Card 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://th.bing.com/th/id/R.240e1d2ed351a3b09851fddfa7679cd8?rik=AxbUvvjFyfWXJQ&pid=ImgRaw&r=0" class="card-img-top" alt="Course Image">
                    <div class="card-body">
                        <h5 class="card-title">Course 1</h5>
                        <p class="card-text">A brief description of the course content.</p>
                        <a href="#" class="btn btn-primary">View Course</a>
                    </div>
                </div>
            </div>
            <!-- Course Card 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://th.bing.com/th/id/R.240e1d2ed351a3b09851fddfa7679cd8?rik=AxbUvvjFyfWXJQ&pid=ImgRaw&r=0" class="card-img-top" alt="Course Image">
                    <div class="card-body">
                        <h5 class="card-title">Course 2</h5>
                        <p class="card-text">A brief description of the course content.</p>
                        <a href="#" class="btn btn-primary">View Course</a>
                    </div>
                </div>
            </div>
            <!-- Course Card 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://filmdaily.co/wp-content/uploads/2020/05/online-courses-lede.jpg" class="card-img-top" alt="Course Image">
                    <div class="card-body">
                        <h5 class="card-title">Course 3</h5>
                        <p class="card-text">A brief description of the course content.</p>
                        <a href="#" class="btn btn-primary">View Course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Course Progress Section -->
    <div class="my-4">
        <h2 class="mb-4">Your Course Progress</h2>
        <div class="progress mb-3">
            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
        </div>
        <div class="progress mb-3">
            <div class="progress-bar bg-success" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
        </div>
        <div class="progress mb-3">
            <div class="progress-bar bg-info" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
        </div>
    </div>

    <!-- Analytics Section -->
    <div class="my-4">
        <h2 class="mb-4">Analytics</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="p-4 bg-primary text-white rounded">
                    <h3><i class="fas fa-book"></i> 12</h3>
                    <p>Enrolled Courses</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-success text-white rounded">
                    <h3><i class="fas fa-check-circle"></i> 8</h3>
                    <p>Completed Courses</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-info text-white rounded">
                    <h3><i class="fas fa-clock"></i> 150</h3>
                    <p>Hours Studied</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
