document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Thank you for contacting us, ' + document.getElementById('name').value + '!');
});

let testimonials = document.querySelectorAll('.testimonial');
let currentTestimonial = 0;

document.getElementById('next-testimonial').addEventListener('click', function() {
    testimonials[currentTestimonial].classList.remove('active');
    currentTestimonial = (currentTestimonial + 1) % testimonials.length;
    testimonials[currentTestimonial].classList.add('active');
});

document.getElementById('prev-testimonial').addEventListener('click', function() {
    testimonials[currentTestimonial].classList.remove('active');
    currentTestimonial = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
    testimonials[currentTestimonial].classList.add('active');
});


