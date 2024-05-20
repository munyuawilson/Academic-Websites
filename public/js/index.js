let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
document.addEventListener("DOMContentLoaded", function() {
    const animatedSections = document.querySelectorAll('.animated-section');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate__fadeInUp');
            } else {
                entry.target.classList.remove('animate__fadeInUp');
            }
        });
    });

    animatedSections.forEach(section => {
        observer.observe(section);
    });
});
