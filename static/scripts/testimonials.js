btn = document.getElementById('more-testimonials-btn');
btn.addEventListener('click', readMore);

function readMore() {
    testimonials = document.getElementById('more-testimonials');
    testimonials.className = " ";
    btn = document.getElementById('more-testimonials-btn');
    btn.className = "hidden";
}