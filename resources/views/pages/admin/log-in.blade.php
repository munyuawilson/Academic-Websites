<!DOCTYPE html>
<html lang="en">
<title>Log In</title>
<meta name="description" content="MasterAssignmentHelp.com provides online assignment help for students. Our team of experts can help you with essays, online classes, exams, projects, and more. Get high grades and reduce stress with our affordable services. Contact us on WhatsApp today!" />
<meta name="keywords" content="assignment help, online classes, essays, exams, projects, homework help, dissertation writing, thesis writing, online tutoring, affordable assignment help" />

   
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}" type="image/x-icon">
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
</head>
<body>
    
@include('includes.nav')

<div class="d-flex  justify-content-center mt-5  border px-3 pt-3 pb-5 shadow" >

<form action="/admin/login" method="post">
@csrf
    <h4 class="pt-2 fw-bold text-center">Log-In</h4>
    <div class="border border-black fw-black px-3 pt-3 pb-2 rounded shadow">

<div class="form-group mt-2">
<label for="email">Email</label>
<input type="email" id="email" name="email"placeholder="Email" class="form-control" required> 
</div>
<div class="form-group mt-2">
<label for="password">Password</label>
<input type="password"  placeholder="Password"  class=" form-control " id="password" name="password" required> 
    
</div>
<div class="form-group mt-3">

<input type="submit" class="btn btn-primary " value="Log-in"> 
    
</div>

@if ($errors->any())
    <div class=" text-center alert alert-danger alert-dismissible fade show" role="alert">
        {{ $errors->first() }}

</div>
@endif
</div>
</form>

</div>

@include('includes.footer')

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.umd.min.js"
></script>

</html>