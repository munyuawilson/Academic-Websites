<head>
    <style>
        

        .sidebar-header img {
            max-width: 100%;
        }

        .wrapper {
            display: flex;
            flex-wrap: nowrap;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            color: #fff;
            transition: all 0.3s;
            position: -webkit-sticky; /* Safari */
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
        }

        #content {
            width: 100%;
            padding: 20px;
        }

        @media (max-width: 768px) {
            #sidebar {
                min-width: 100%;
                max-width: 100%;
                position: relative;
                height: auto;
            }
            #sidebar.active {
                margin-left: 0;
            }
        }

        .link:hover {
            color: black;
            background: #fff;
        }

        .dropdown-toggle::after {
            display: none;
        }
    </style>
</head>
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="nav-bg fixed">
            <div class="sidebar-header ">
            <a class="navbar-brand  fw-bold" href="/">
        <img src="{{ asset('/images/logowhite.png') }}" class="img-fluid " alt="logo" height="50px">
        
      </a>
            </div>

            <ul class="list-unstyled components">
                
               
            <li class="">
                    <a href="/Dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <li>
                    <a href="/Dashboard/progress"><i class="fas fa-spinner"></i> In Progress</a>
                </li>
                <li>
                    <a href="/Dashboard/revision"><i class="fas fa-sync-alt"></i> Revision</a>
                </li>
                <li>
                    <a href="/Dashboard/paid"><i class="fas fa-check-circle"></i> Paid</a>
                </li>
                <li>
                    <a href="/Dashboard/completed"><i class="fas fa-check-double"></i> Completed</a>
                </li>
                <li>
                    <a href="/Dashboard/disputed"><i class="fas fa-exclamation-triangle"></i> Disputed</a>
                </li>
                <li>
                    <a href="/order"><i class="fas fa-shopping-cart"></i> Order</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-address-book"></i> Contact</a>
                </li>

                <li class="dropdown link mt-5">
                    <a class="dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i> <span class="text-white"> Profile</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user-edit"></i> Edit Profile</a></li>
                        <li><a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>

            
        </nav>