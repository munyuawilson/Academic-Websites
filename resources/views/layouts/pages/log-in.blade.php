@include('layouts.includes.head')
@include('layouts.includes.nav')
<div class="d-flex  justify-content-center mt-5  border px-3 pt-3 pb-3 shadow" >

<form action="">
    <h4 class="pt-2 fw-bold text-center">Log-In</h4>
    <div class="border border-black fw-black px-3 pt-3 pb-3 rounded shadow">

<div class="form-group mt-2">
<label for="email">Email</label>
<input type="email" id="email" placeholder="Email" class="form-control"> 
</div>
<div class="form-group mt-2">
<label for="password">Password</label>
<input type="password"  placeholder="Password"  class=" form-control " id="password" name="password"> 
    
</div>
<div class="form-group mt-3">

<input type="submit" class="btn btn-primary " value="Log-in"> 
    
</div>
<p class="pt-2">Don't have an account?<a href="/sign-up" class=""> Sign-Up</a> </p>
</div>
</form>
</div>
@include('layouts.includes.footer')