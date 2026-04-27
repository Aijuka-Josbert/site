<?php
session_start();
include('config/db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BeyondCode builds web platforms, mobile apps, and digital products for ambitious businesses.">
    <title>BeyondCode | Software Development Company</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navfooter/navbar.css">
    <link rel="stylesheet" href="navfooter/footer.css">
    <link rel="stylesheet" href="inde.css">
</head>
<body>
<div class="page-wrap">
    <?php include('navfooter/navbar.php'); ?>

    <main>
        <section class="home-hero">
            <div class="container hero-grid">
                <figure class="hero-media">
                    <img src="./indimges/welcomerimg.jpeg" alt="BeyondCode engineers collaborating in office">
                </figure>

                <div class="hero-copy">
                    <p class="hero-kicker">Software Engineering Studio</p>
                    <h1>Welcome, clients. We build ideas into reliable digital products.</h1>
                    <p>From strategy to launch, BeyondCode helps startups and established teams ship websites, apps, and tools that feel polished and perform at scale.</p>
                    <div class="hero-actions">
                        <a class="btn" href="about.php">About Us</a>
                        <a class="btn secondary" href="tel:+256759420168">&#9742; Contact Us</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="details-section">
            <div class="container">
                <h2 class="section-title">Details About Us</h2>
                <div class="details-card">
                    <p>We are a software company ready to support your technology goals, including website development, mobile applications, web hosting, domain services, and custom digital systems.</p>
                    <p>Our team turns customer imagination into practical, production-ready solutions at affordable prices in Uganda. We focus on quality execution, clear communication, and long-term support after delivery.</p>
                    <p>Find us on Kyaliwajjala-Namugongo Road, opposite Crane Gardens.</p>
                </div>
            </div>
        </section>

        <section class="services-preview">
            <div class="container services-preview-grid">
                <div>
                    <h2 class="section-title">Our Core Services</h2>
                    <p class="section-lead">Focused offerings for businesses that need fast delivery and strong technical foundations.</p>
                    <ul class="service-pills">
                        <li>Domain Services</li>
                        <li>Web Hosting</li>
                        <li>Website Development</li>
                        <li>Mobile Application Development</li>
                        <li>Software Development</li>
                        <li>Web Design</li>
                    </ul>
                </div>
                <div class="services-cta">
                    <a class="btn" href="service.php">See Full Service Catalog</a>
                </div>
            </div>
        </section>

        <section class="testimonials-section">
            <div class="container">
                <h2 class="section-title">Feedback From Some Of Our Clients</h2>
                <div class="testimonial-grid">
                    <article class="testimonial-card">
                        <img src="./indimges/card/samie.png" alt="Deputy UBOS">
                        <h3>Deputy UBOS</h3>
                        <p>I reached out to them to build a business website and they truly outdid themselves. The final product was user-friendly and professional.</p>
                    </article>

                    <article class="testimonial-card">
                        <img src="./indimges/card/comfy.png" alt="Lawyer at Uganda High Court">
                        <h3>Lawyer at Uganda High Court</h3>
                        <p>They met every request I made and handled revisions quickly. Communication was clear and the quality stayed high throughout.</p>
                    </article>

                    <article class="testimonial-card">
                        <img src="./indimges/card/hamza.png" alt="CEO MultiTech">
                        <h3>CEO MultiTech</h3>
                        <p>We needed a banking system delivered fast. BeyondCode shipped on time and trained our team on operations after deployment.</p>
                    </article>

                    <article class="testimonial-card">
                        <img src="./indimges/card/esi.png" alt="Marketing Director Aviation">
                        <h3>Marketing Director Aviation</h3>
                        <p>Amazing teamwork and commitment from start to finish. Their cooperation and delivery quality were excellent.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="partners-section">
            <div class="container">
                <h2 class="section-title">Some Of Our Partners Include</h2>
                <div class="partners-grid">
                    <img src="./indimges/products/sponsors/airbnb.png" alt="Airbnb">
                    <img src="./indimges/products/sponsors/nasa.png" alt="NASA">
                    <img src="./indimges/products/sponsors/slack.png" alt="Slack">
                    <img src="./indimges/products/sponsors/umu.png" alt="Uganda Martyrs University">
                    <img src="./indimges/products/sponsors/x.png" alt="X">
                    <img src="./indimges/products/sponsors/thinkx.png" alt="ThinkX Software">
                </div>
            </div>
        </section>
    </main>

    <?php include('navfooter/footer.php'); ?>
</div>

<script src="navfooter/navbar.js"></script>
</body>
</html>