
@extends('layouts.clientlayout')

@section('title', 'Settings')

@section('content')
    
<div class="container my-4">
    <h1 class="text-center mb-4">Account Settings</h1>
    
    <div class="row">
        <!-- Account Information -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Account Information</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter your username" value="JohnDoe">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" value="johndoe@example.com">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your new password">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Privacy Settings -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Privacy Settings</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="emailNotifications" checked>
                            <label class="form-check-label" for="emailNotifications">
                                Receive email notifications
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="profileVisibility" checked>
                            <label class="form-check-label" for="profileVisibility">
                                Make my profile visible to others
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Notification Preferences -->
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Notification Preferences</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="notificationEmail">Notification Email</label>
                            <input type="email" class="form-control" id="notificationEmail" placeholder="Enter notification email" value="notifications@example.com">
                        </div>
                        <div class="form-group">
                            <label for="notificationFrequency">Notification Frequency</label>
                            <select class="form-control" id="notificationFrequency">
                                <option>Daily</option>
                                <option>Weekly</option>
                                <option>Monthly</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
