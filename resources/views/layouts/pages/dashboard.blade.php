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


</head>
<body>
    
@include('layouts.includes.sidebar')

        <!-- Page Content  -->
        <div id="content">

        @include('layouts.includes.topnav')  

            <div class="container mt-5">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 border-right-blue-grey border-right-lighten-5 clickable" onclick="window.location.href='/Dashboard/progress'">
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
                    <div class="col-lg-4 col-sm-12 border-right-blue-grey border-right-lighten-5 clickable" onclick="window.location.href='/Dashboard/progress'">
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
                    <div class="col-lg-4 col-sm-12 border-right-blue-grey border-right-lighten-5 clickable" onclick="window.location.href='/Dashboard/review'">
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
                    <div class="col-lg-4 col-sm-12 border-right-blue-grey border-right-lighten-5 clickable" onclick="window.location.href='/Dashboard/paid'">
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
                    <div class="col-lg-4 col-sm-12 border-right-blue-grey border-right-lighten-5 clickable" onclick="window.location.href='/orders/in-progress/'">
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
                    <div class="col-lg-4 col-sm-12 border-right-blue-grey border-right-lighten-5 clickable" onclick="window.location.href='/Dashboard/disputed'">
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