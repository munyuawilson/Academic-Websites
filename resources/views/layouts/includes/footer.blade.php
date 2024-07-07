
<div class="container-fluid bg-dark text-white mt-5 pt-3">
    <div class="row mt-3 pt-3">
        <div class="col px-3 "><ul class="links">
            <li>perfectpapers54@gmail.com

</li>
            <li>+1 (914) 317-4571</li>
            <li>+1 (365) 657-5404</li>
        </ul></div>
        <div class="col text-start justify-content-start px-4">
        <ul class="footer-list">
    <li><a href="/" class="px-2">Home</a></li>
    <li><a href="/services" class="px-2">Services</a></li>
    <li><a href="/revision" class="px-2">Revision Policy</a></li>
    <li><a href="#" class="px-2">Latest Reviews</a></li>
    <li><a href="/how-it-works" class="px-2">How it Works</a></li>
    <li><a href="#" class="px-2">Refund Policy</a></li>
</ul>

        </div>
    </div>
    <div class="pb-1 mt-2">
        <p class="text-center">2011-2021 © topessaytutors.com All rights reserved</p>
    </div>
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

</html>