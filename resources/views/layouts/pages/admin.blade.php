<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<style>
    /*
    DEMO STYLE
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
   
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: black;
    background: #fff;
}
.link:hover {
    color: black;
    background: #fff;
}



#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}

a[data-toggle="collapse"] {
    position: relative;
}



ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}
.card-content {
            padding: 20px;
        }
        .card-body {
            padding: 10px;
        }
        .clickable {
            cursor: pointer;
        }
        .border-right-blue-grey {
            border-right: 1px solid #b0bec5;
        }
        .font-large-1 {
            font-size: 2rem;
        }
        .font-large-2 {
            font-size: 2.5rem;
        }
        .blue-grey {
            color: #607d8b;
        }
        .success {
            color: #28a745;
        }
        .info {
            color: #17a2b8;
        }
        

</style>

</head>
<body>
    
@include('layouts.includes.sidebaradmin')

        <!-- Page Content  -->
        <div id="content">

        @include('layouts.includes.topadminnav')  

            <div class="container mt-5">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 border-right-blue-grey border-right-lighten-5 clickable" onclick="window.location.href='/admin/progress'">
                        <div class="pb-1">
                            <div class="clearfix mb-1">
                                <i class="fas fa-tag font-large-1 blue-grey float-left mt-1"></i>
                                <span class="font-large-2 text-bold-300 success float-right" id="dashboard-available-count">{{$orderCount}}</span>
                            </div>
                            <div>
                                <h3 class="blue-grey">Available</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 border-right-blue-grey border-right-lighten-5 clickable" onclick="window.location.href='/admin/progress'">
                        <div class="pb-1">
                            <div class="clearfix mb-1">
                                <i class="fas fa-pencil-alt font-large-1 blue-grey float-left mt-1"></i>
                                <span class="font-large-2 text-bold-300 info float-right" id="dashboard-inprogress-count">{{$orderCount}}</span>
                            </div>
                            <div>
                                <h3 class="blue-grey">In Progress</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 border-right-blue-grey border-right-lighten-5 clickable" onclick="window.location.href='/admin/review'">
                        <div class="pb-1">
                            <div class="clearfix mb-1">
                                <i class="fas fa-flag font-large-1 blue-grey float-left mt-1"></i>
                                <span class="font-large-2 text-bold-300 info float-right" id="dashboard-inreview-count">{{$orderCount}}</span>
                            </div>
                            <div>
                                <h3 class="blue-grey">In Review</h3>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                
                
            </div>

        </div>
    </div>




    <div class="card mt-5">
        <div class="card-content">
            <div class="card-body">

            <div class="row shadow">
                    <div class="col-lg-4 col-sm-12 border-right-blue-grey border-right-lighten-5 clickable" onclick="window.location.href='/admin/paid'">
                        <div class="pb-1">
                            <div class="clearfix mb-1">
                            <i class="fas fa-check-circle font-large-1 blue-grey float-left mt-1"></i>
                                <span class="font-large-2 text-bold-300 success float-right" id="dashboard-available-count">{{$paidCount}}</span>
                            </div>
                            <div>
                                <h3 class="blue-grey">Paid</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 border-right-blue-grey border-right-lighten-5 clickable" onclick="window.location.href='/admin/revision/'">
                        <div class="pb-1">
                            <div class="clearfix mb-1">
                            <i class="fas fa-sync-alt font-large-1 blue-grey float-left mt-1"></i>
                                <span class="font-large-2 text-bold-300 info float-right" id="dashboard-inprogress-count">{{$revisedCount}}</span>
                            </div>
                            <div>
                                <h3 class="blue-grey">Revision</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 border-right-blue-grey border-right-lighten-5 clickable" onclick="window.location.href='/admin/disputed'">
                        <div class="pb-1">
                            <div class="clearfix mb-1">
                            <i class="fas fa-exclamation-triangle font-large-1 blue-grey float-left mt-1"></i>
                                <span class="font-large-2 text-bold-300 info float-right" id="dashboard-inreview-count">0</span>
                            </div>
                            <div>
                                <h3 class="blue-grey">Disputed</h3>
                            </div>
                        </div>
                    </div>
                    
                </div>
        </div>
        </div>
    </div>
    
</div>




















        </div>
    </div>

   



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->

  <script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
</body>
</html>