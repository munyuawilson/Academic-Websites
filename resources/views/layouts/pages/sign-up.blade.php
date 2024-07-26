@include('layouts.includes.head')
@include('layouts.includes.nav')
<div class="d-flex  justify-content-center mt-5  border px-3 pt-3 pb-5 shadow" >

<form action="/sign-up" method="post">
    @csrf
    <h4 class="pt-2 fw-bold text-center">Sign-Up</h4>
    <div class="border border-black fw-black px-3 pt-3 pb-3 rounded shadow">
<div class="form-group  mt-2">
<label for="name">Username</label>
<input type="text"  id='name' name='name' class="form-control " required>
</div>
<div class="form-group mt-2">
<label for="email">Email</label>
<input type="email" id="email" name="email" placeholder="Email" class="form-control" required> 
</div>
<div class="form-group mt-2">
<label for="password">Password</label>
<input type="password"  placeholder="Password"  class=" form-control " id="password" name="password" required> 
    
</div>
<div class="form-group mt-3">

<input type="submit" class="btn btn-primary " value="Sign-Up"> 
    
</div>
<p class="pt-2">Already have an account?<a href="/login" class=""> Log in</a> </p>
</div>
</form>
</div>
@include('layouts.includes.footer')