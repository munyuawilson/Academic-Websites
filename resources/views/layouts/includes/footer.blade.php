
<div class="container-fluid bg-dark text-white mt-5 pt-3 pb-3">
    <div class="row mt-3 ">
        <div class="col px-4 ">
            <h4>Contact Us</h4>
            <ul class="links ">
            <li class="text-white">undergraduateshighschoolassign@gmail.com

</li>
            <li class="text-white">+1 (914) 317-4571</li>
        </ul>
    </div>
        <div class="col px-4 mx-3">
            <h4>About Us</h4>
        <ul class="list-unstyled">
    <li><a href="/" class="px-2 " style="text-decoration:none;color:white;">Home</a></li>
    <li><a href="/services" class="px-2" style="text-decoration:none;color:white;">Services</a></li>
    <li><a href="/revision" class="px-2" style="text-decoration:none;color:white;">Revision Policy</a></li>
    <li><a href="#" class="px-2" style="text-decoration:none;color:white;">Latest Reviews</a></li>
    <li><a href="/how-it-works" class="px-2" style="text-decoration:none;color:white;">How it Works</a></li>
    <li><a href="#" class="px-2" style="text-decoration:none;color:white;">Refund Policy</a></li>
</ul>

        </div>
    </div>
    <div class="container-fluid pb-1 mt-2">
        <p class="text-center">2011-2024 © topessaytutors.com All rights reserved. Developed by: Turbo Knights Systems</p>
    </div>
  
</div>
<div id="popup" class="popup">
    <div class="popup-content">
        <span id="closePopup" class="close">&times;</span>
        <h2>Exclusive offers on full courses this semester! Contact us now!</h2>
        <a href="/faqs" class="btn">Explore Our Services</a>
        <a href="mailto:undergraduateshighschoolassign@gmail.com" class="btn">Contact Us</a>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("slide");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 3000); // Change slide every 3 seconds
    }

    function plusSlides(n) {
        slideIndex += n - 1; // Adjust slide index for manual control
        showSlides();
    }

    function currentSlide(n) {
        slideIndex = n - 1;
        showSlides();
    }
</script>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/66675e7a9a809f19fb3c2d85/1i01si4ma';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<script>
  // Get the popup
var popup = document.getElementById("popup");

// Get the <span> element that closes the popup
var span = document.getElementById("closePopup");

// Show the popup when the page loads
window.onload = function() {
    popup.style.display = "block";
}

// When the user clicks on <span> (x), close the popup
span.onclick = function() {
    popup.style.display = "none";
}

// When the user clicks anywhere outside of the popup, close it
window.onclick = function(event) {
    if (event.target == popup) {
        popup.style.display = "none";
    }
}
</script>
</html>