
@extends('layouts.clientlayout')

@section('title', 'Messages')

@section('content')
<div class="container my-4">
    <h1 class="text-center mb-4">Messages</h1>

    <div class="row">
        <!-- Message List -->
        <div class="col-md-8 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Inbox</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <!-- Sample Message -->
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">John Doe</h6>
                                <p class="mb-1">Hi, I have a question about the upcoming assignment...</p>
                                <small>2 hours ago</small>
                            </div>
                            <a href="#" class="btn btn-primary btn-sm">Read</a>
                        </li>
                        <!-- Repeat for more messages -->
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Jane Smith</h6>
                                <p class="mb-1">Can you provide more details on the research paper?</p>
                                <small>1 day ago</small>
                            </div>
                            <a href="#" class="btn btn-primary btn-sm">Read</a>
                        </li>
                        <!-- End Sample Message -->
                    </ul>
                </div>
            </div>
        </div>

        <!-- Compose Message -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Compose Message</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient">To:</label>
                            <input type="text" class="form-control" id="recipient" placeholder="Recipient">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Write your message here..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
