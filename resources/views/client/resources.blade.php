<!-- resources/views/dashboard.blade.php -->
@extends('layouts.clientlayout')

@section('title', 'Resources')

@section('content')
    
<div class="container my-4">
    <h1 class="text-center mb-4">Resources</h1>

    <div class="row">
        <!-- Downloadable Resources -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Downloadable Resources</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#" class="text-decoration-none">Research Paper Guidelines</a>
                            <a href="#" class="btn btn-primary btn-sm">Download</a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#" class="text-decoration-none">Citation Styles Handbook</a>
                            <a href="#" class="btn btn-primary btn-sm">Download</a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#" class="text-decoration-none">Sample Dissertation</a>
                            <a href="#" class="btn btn-primary btn-sm">Download</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Useful Links -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Useful Links</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="https://www.example.com" class="text-decoration-none">Academic Writing Resources</a>
                        </li>
                        <li class="list-group-item">
                            <a href="https://www.example.com" class="text-decoration-none">Online Libraries</a>
                        </li>
                        <li class="list-group-item">
                            <a href="https://www.example.com" class="text-decoration-none">Citation Tools</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Tutorials -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Tutorials</h5>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <h5 class="mb-1">How to Write a Research Paper</h5>
                            <p class="mb-1">A step-by-step guide to writing an effective research paper.</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <h5 class="mb-1">Understanding Citation Styles</h5>
                            <p class="mb-1">An overview of different citation styles and their uses.</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <h5 class="mb-1">Creating a Dissertation</h5>
                            <p class="mb-1">Tips and strategies for creating a successful dissertation.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
