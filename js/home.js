var slideIndex = 0;
showSlides();
function showSlides() {
    var slides = document.getElementsByClassName("mySlides");
    for (var i = 0; i < slides.length; i++) {
        slides[i].classList.remove('current');
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    slides[slideIndex - 1].style.display = "flex";
    slides[slideIndex - 1].classList.add('current');
    setTimeout(showSlides, 5000); // Change image every 5 seconds
}