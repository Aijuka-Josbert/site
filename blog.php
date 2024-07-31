<?php

?>
<!DOCTYPE html>
<html lang="en">
<?php include('navfooter/navbar.php');  ?>
<?php echo "<link rel='stylesheet' type='text/css' href='navfooter/navbar.css' />"; ?>
<?php echo "<link rel='stylesheet' type='text/css' href='blog.css' />";  ?>
<!--blog -->
    <header>
        <h1>BeyondCode Company</h1>
    </header>

    <section id="home" class="section">
        <h2>Welcome to Innovatech Solutions</h2>
        <p>Your trusted partner in software engineering, delivering cutting-edge solutions to meet your business needs.</p>
    </section>

    <section id="about" class="section">
        <h2>About Us</h2>
        <p>At Innovatech Solutions, we specialize in providing top-notch software engineering services, utilizing the latest technologies to drive your business forward.</p>
    </section>

    <section id="services" class="section">
        <h2>Our Services</h2>
        <ul>
            <li>Consulting</li>
            <li>App Development</li>
            <li>AI & Machine Learning</li>
            <li>Blockchain Technology</li>
            <li>IT Consultancy</li>
        </ul>
    </section>

    <section id="blog" class="section">
        <h2>Latest Blog Posts</h2>
        <article>
            <h3>Embracing New Technologies in Software Engineering</h3>
            <p>The world of software engineering is constantly evolving with the advent of new technologies. From cloud computing to blockchain, we explore the latest trends shaping the industry.</p>
        </article>
        <article>
            <h3>How AI is Simplifying the IT Sector</h3>
            <p>Artificial Intelligence (AI) is revolutionizing the IT sector by automating tasks, improving decision-making processes, and enhancing overall efficiency. Learn how AI is transforming the way we work.</p>
        </article>
        <article>
            <h3>The Future of Blockchain in Software Development</h3>
            <p>Blockchain technology is not just for cryptocurrencies. Discover how it's being integrated into software development to create more secure and transparent applications.</p>
        </article>
    </section>

    <section id="testimonials" class="section">
        <h2>Testimonials</h2>
        <div class="testimonial-slider">
            <div class="testimonial active">
                <p>"Innovatech Solutions transformed our business with their innovative solutions and excellent service. Highly recommend!" - Jane Doe, CEO of TechCorp</p>
            </div>
            <div class="testimonial">
                <p>"Their expertise in AI and machine learning helped us streamline our operations and improve efficiency." - John Smith, CTO of Innovatech Industries</p>
            </div>
            <div class="testimonial">
                <p>"Fantastic team to work with! Their blockchain solutions are top-notch." - Emily Johnson, CFO of FinTech Co.</p>
            </div>
        </div>
        <button id="prev-testimonial">Previous</button>
        <button id="next-testimonial">Next</button>
    </section>

    <section id="contact" class="section">
        <h2>Contact Us</h2>
        <form id="contact-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </section>

    <p>&copy; 2024 BeyondCode. All rights reserved.</p>

    <script src="blog.js"></script>

</html>