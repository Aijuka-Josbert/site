<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Read BeyondCode insights on software engineering, AI, and product delivery.">
    <title>BeyondCode | Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navfooter/navbar.css">
    <link rel="stylesheet" href="navfooter/footer.css">
    <link rel="stylesheet" href="blog.css">
</head>
<body>
<div class="page-wrap">
    <?php include('navfooter/navbar.php'); ?>

    <main>
        <section class="blog-hero">
            <div class="container">
                <p class="hero-kicker">Engineering Journal</p>
                <h1>Latest Thinking From BeyondCode</h1>
                <p>Practical notes on building scalable software, managing delivery, and integrating modern technologies into business operations.</p>
            </div>
        </section>

        <section class="blog-layout">
            <div class="container blog-layout-grid">
                <div class="posts-column">
                    <article class="post-card">
                        <h2>Embracing New Technologies in Software Engineering</h2>
                        <p>Software engineering evolves continuously. From cloud systems to modern integration patterns, teams can deliver better products by choosing technology based on clear business outcomes.</p>
                    </article>

                    <article class="post-card">
                        <h2>How AI Is Simplifying the IT Sector</h2>
                        <p>AI now supports ticket classification, report generation, anomaly detection, and workflow automation. Used correctly, it reduces repetitive work and improves decision speed.</p>
                    </article>

                    <article class="post-card">
                        <h2>The Future of Blockchain in Software Development</h2>
                        <p>Beyond cryptocurrency, blockchain patterns can support transparent records, verification workflows, and tamper-evident logs in sectors that require trust and traceability.</p>
                    </article>

                    <section class="testimonial-panel" id="testimonials">
                        <h2 class="section-title">Testimonials</h2>
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
                        <div class="slider-actions">
                            <button id="prev-testimonial" type="button">Previous</button>
                            <button id="next-testimonial" type="button">Next</button>
                        </div>
                    </section>

                    <section class="contact-panel" id="contact">
                        <h2 class="section-title">Contact Us</h2>
                        <form id="contact-form" class="contact-form">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required>

                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>

                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required></textarea>

                            <button type="submit">Submit</button>
                        </form>
                    </section>
                </div>

                <aside class="sidebar-column">
                    <div class="side-card">
                        <h3>Topics</h3>
                        <ul>
                            <li>Web Platforms</li>
                            <li>Mobile Delivery</li>
                            <li>AI Workflows</li>
                            <li>Security & Reliability</li>
                        </ul>
                    </div>

                    <div class="side-card">
                        <h3>Need A Build Partner?</h3>
                        <p>Our team helps companies design, ship, and scale software products in predictable milestones.</p>
                        <a class="btn" href="service.php">View Services</a>
                    </div>
                </aside>
            </div>
        </section>
    </main>

    <?php include('navfooter/footer.php'); ?>
</div>

<script src="navfooter/navbar.js"></script>
<script src="blog.js"></script>
</body>
</html>