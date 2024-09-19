<div class="container-fluid">
    <!-- Header -->
    <div class="row bg-dark text-white p-2">
        <div class="col-md-3 d-flex align-items-center">
            <!-- Logo -->
        </div>
       
        <div class="d-flex justify-content-end align-items-end text-end float-end">
            <!-- Profile Icon -->
            <i class="fas fa-user-circle fa-2x text-white"></i>
        </div>
    </div>

    <!-- Sidebar and Content Area -->
    <div class="row flex-nowrap">
        <!-- Sidebar -->
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="{{ route('dashboard') }}" class="text-white text-decoration-none fs-4">
                    <span style='color:red;'>Top</span>Essay<span style='color:rgb(3, 45, 87);'>Tutors</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item pt-4">
                        <a href="{{ route('dashboard') }}" class="nav-link align-middle px-0 text-white">
                            <i class="fas fa-tachometer-alt text-white"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item pt-4">
                        <a href="{{ route('courses') }}" class="nav-link align-middle px-0 text-white">
                            <i class="fas fa-book text-white"></i> <span class="ms-1 d-none d-sm-inline">Courses</span>
                        </a>
                    </li>
                    <li class="nav-item pt-4">
                        <a href="{{ route('calendar') }}" class="nav-link align-middle px-0 text-white">
                            <i class="fas fa-calendar-alt text-white"></i> <span class="ms-1 d-none d-sm-inline">Calendar</span>
                        </a>
                    </li>
                    <li class="nav-item pt-4">
                        <a href="{{ route('messages') }}" class="nav-link align-middle px-0 text-white">
                            <i class="fas fa-envelope text-white"></i> <span class="ms-1 d-none d-sm-inline">Messages</span>
                        </a>
                    </li>
                    <li class="nav-item pt-4">
                        <a href="{{ route('resources') }}" class="nav-link align-middle px-0 text-white">
                            <i class="fas fa-folder text-white"></i> <span class="ms-1 d-none d-sm-inline">Resources</span>
                        </a>
                    </li>
                    <li class="nav-item pt-4">
                        <a href="{{ route('settings') }}" class="nav-link align-middle px-0 text-white">
                            <i class="fas fa-cog text-white"></i> <span class="ms-1 d-none d-sm-inline">Settings</span>
                        </a>
                    </li>
                </ul>
                <hr>
                <!-- Profile Section -->
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle text-white"></i>
                        <span class="d-none d-sm-inline mx-1">User</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="col py-3">
            @yield('content')
        </div>
    </div>
</div>
