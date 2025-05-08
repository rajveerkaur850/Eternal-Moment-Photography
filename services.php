<?php include 'include/header.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Services</title>
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>
<body>



<!-- end of header -->

<!-- Main Section for Services Page -->
<section class="services-main">
    <section class="container">
        <section class="section-heading">
            <h2 class="highlight-heading">Our Services</h2>
            <p class="highlight-subtext">Explore the range of services we offer to help you achieve your goals. We are
                committed to delivering exceptional value to our clients.</p>
        </section>

        <section class="services-grid">
            <!-- Service 1 -->
            <article class="service">
                <img src="images/service1.jpg" alt="Service 1">
                <section class="service-content">
                    <h3 class="service-title">Photography</h3>
                    <p class="service-description">Capture precious moments with our professional photography services,
                        from weddings to corporate events.</p>
                    <a href="#" class="btn top-btn">Learn More</a>
                </section>
            </article>

            <!-- Service 2 -->
            <article class="service">
                <img src="images/service2.png" alt="Service 2">
                <section class="service-content">
                    <h3 class="service-title">Video Production</h3>
                    <p class="service-description">Create stunning videos with our expert production team, tailored for
                        commercials, documentaries, and more.</p>
                    <a href="#" class="btn bottom-btn">Learn More</a>
                </section>
            </article>

            <!-- Service 3 -->
            <article class="service">
                <img src="images/service3.png" alt="Service 3">
                <section class="service-content">
                    <h3 class="service-title">Editing & Post-Production</h3>
                    <p class="service-description">Enhance your visual content with our professional editing and
                        post-production services to create high-quality final products.</p>
                    <a href="#" class="btn top-btn">Learn More</a>
                </section>
            </article>

            <!-- Service 4 -->
            <article class="service">
                <img src="images/service4.jpg" alt="Service 4">
                <section class="service-content">
                    <h3 class="service-title">Branding & Marketing</h3>
                    <p class="service-description">Grow your business with our branding and marketing services, designed
                        to boost your presence and reach.</p>
                    <a href="#" class="btn bottom-btn">Learn More</a>
                </section>
            </article>
        </section>
    </section>
</section>

<!-- footer -->
<footer class="footer">
    <section class="footer-container container">
        <article>
            <h2>Eternal Moments Photography</h2>
            <p>We believe in capturing genuine emotions and creating memories that last a lifetime. Trust us to make
                your wedding day unforgettable.</p>
        </article>

        <section>
            <h3>Free Subscription!</h3>
            <p>Subscribe to our newsletter and get special discounts on our wedding photography packages.</p>

            <form class="subs" action="#" method="post">
                <label for="email" class="visually-hidden">Email Address</label>
                <i class="fas fa-envelope" aria-hidden="true"></i>
                <input type="email" id="email" name="email" placeholder="Email Address" required>
                <button type="submit">SUBSCRIBE</button>
            </form>
        </section>
    </section>
    <p>&copy; Copyright Eternal Moments Photography. All Rights Reserved.</p>
</footer>
<!-- end of footer -->


<script src="script.js"></script>
</body>
</html>





