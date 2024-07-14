@include('layouts.includes.head')
@include('layouts.includes.nav')

<div class="d-flex  justify-content-center mt-5  border px-3 pt-3 pb-5 shadow" >

<form action="/log-in" method="post">
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
<p class="pt-2 pb-2">Don't have an account?<a href="/sign-up" class=""> Sign-Up</a> </p>
@if ($errors->any())
    <div class=" text-center alert alert-danger alert-dismissible fade show" role="alert">
        {{ $errors->first() }}
</div>
@endif
</div>
</form>

</div>

@include('layouts.includes.footer')