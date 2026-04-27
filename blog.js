const contactForm = document.getElementById("contact-form");
const nameInput = document.getElementById("name");

if (contactForm && nameInput) {
    contactForm.addEventListener("submit", function (event) {
        event.preventDefault();
        alert("Thank you for contacting us, " + nameInput.value + "!");
    });
}

const testimonials = document.querySelectorAll(".testimonial");
const nextButton = document.getElementById("next-testimonial");
const prevButton = document.getElementById("prev-testimonial");
let currentTestimonial = 0;

if (testimonials.length > 0 && nextButton && prevButton) {
    nextButton.addEventListener("click", function () {
        testimonials[currentTestimonial].classList.remove("active");
        currentTestimonial = (currentTestimonial + 1) % testimonials.length;
        testimonials[currentTestimonial].classList.add("active");
    });

    prevButton.addEventListener("click", function () {
        testimonials[currentTestimonial].classList.remove("active");
        currentTestimonial = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
        testimonials[currentTestimonial].classList.add("active");
    });
}


