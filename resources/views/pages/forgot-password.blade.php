<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Forgot Password</title>
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

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/665c9fc4981b6c5647777b17/1hvct06b2';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

@include('includes.nav')

<div class="d-flex  justify-content-center mt-5  border px-3 pt-3 pb-5 shadow" >
<form action="/forgot-password" method="post" id="passwordForm">
@csrf
    <h4 class="pt-2 fw-bold text-center">Forgot Password</h4>
    <div class="border border-black fw-black px-3 pt-3 pb-2 rounded shadow">

<div class="form-group mt-2">
<label for="email">Email</label>
<input type="email" id="email" name="email"placeholder="Email" class="form-control" required> 
</div>
<div class="form-group mt-2">
<label for="password">New Password</label>
<input type="password"  placeholder="Password"  class=" form-control " id='password' name="password" required> 
    
</div>
<div class="form-group mt-2">
<label for="password">Confirm Password</label>
<input type="password"  placeholder="Repeat Password"  class=" form-control " id='confirmPassword' name="password" required> 
    
</div>
<div class="form-group mt-3">

<input type="submit" class="btn btn-primary " value="Submit"> 
    
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


<script>
        document.getElementById('passwordForm').addEventListener('submit', function(event) {
             // Prevent form submission

            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirmPassword').value;

            if (password !== confirmPassword) {
                event.preventDefault();
                alert('Passwords do not match. Please try again.');
            } 
            
        });
    </script>

  
</body>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.umd.min.js"
></script>
</html>