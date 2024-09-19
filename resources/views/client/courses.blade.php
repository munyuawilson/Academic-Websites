
@extends('layouts.clientlayout')

@section('title', 'Courses')

@section('content')
<div class="container my-4">
    <h1 class="text-center mb-4">Our Courses</h1>
    <div class="row">
        <!-- Course Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://leverageedublog.s3.ap-south-1.amazonaws.com/blog/wp-content/uploads/2020/04/01170800/Free-Online-Courses-with-Certificates.jpg" class="card-img-top" alt="Course 1">
                <div class="card-body">
                    <h5 class="card-title">Course Title 1</h5>
                    <p class="card-text">A brief description of the course content goes here. Learn new skills and improve your knowledge.</p>
                    <a href="#" class="btn btn-primary">View Course</a>
                </div>
            </div>
        </div>
        
        <!-- Course Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://filmdaily.co/wp-content/uploads/2020/05/online-courses-lede.jpg" class="card-img-top" alt="Course 2">
                <div class="card-body">
                    <h5 class="card-title">Course Title 2</h5>
                    <p class="card-text">Explore the fundamentals of this subject and enhance your understanding with this course.</p>
                    <a href="#" class="btn btn-primary">View Course</a>
                </div>
            </div>
        </div>
        
        <!-- Course Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://www.ox.ac.uk/sites/files/oxford/Choosing-an-Oxford-course.jpg" class="card-img-top" alt="Course 3">
                <div class="card-body">
                    <h5 class="card-title">Course Title 3</h5>
                    <p class="card-text">Delve deeper into advanced topics and master new concepts with this comprehensive course.</p>
                    <a href="#" class="btn btn-primary">View Course</a>
                </div>
            </div>
        </div>


        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://leverageedublog.s3.ap-south-1.amazonaws.com/blog/wp-content/uploads/2020/04/01170800/Free-Online-Courses-with-Certificates.jpg" class="card-img-top" alt="Course 1">
                <div class="card-body">
                    <h5 class="card-title">Course Title 1</h5>
                    <p class="card-text">A brief description of the course content goes here. Learn new skills and improve your knowledge.</p>
                    <a href="#" class="btn btn-primary">View Course</a>
                </div>
            </div>
        </div>
        
        <!-- Course Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://filmdaily.co/wp-content/uploads/2020/05/online-courses-lede.jpg" class="card-img-top" alt="Course 2">
                <div class="card-body">
                    <h5 class="card-title">Course Title 2</h5>
                    <p class="card-text">Explore the fundamentals of this subject and enhance your understanding with this course.</p>
                    <a href="#" class="btn btn-primary">View Course</a>
                </div>
            </div>
        </div>
        
        <!-- Course Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://www.ox.ac.uk/sites/files/oxford/Choosing-an-Oxford-course.jpg" class="card-img-top" alt="Course 3">
                <div class="card-body">
                    <h5 class="card-title">Course Title 3</h5>
                    <p class="card-text">Delve deeper into advanced topics and master new concepts with this comprehensive course.</p>
                    <a href="#" class="btn btn-primary">View Course</a>
                </div>
            </div>
        </div>

        <!-- Additional Course Cards -->
        <!-- Repeat the course card structure for more courses as needed -->
        
    </div>
</div>

@endsection
