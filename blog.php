<?php
    include 'include/header.php';
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Blog</title>
        <meta name = "viewport" content = "width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>
    <body>

    <?php include 'include/header.php'; ?>

        <!-- main -->
       <!-- main -->
<section class="section-four">
    <div class="container">
        <section class="section-heading">
            <h2 class="highlight-heading">Our Latest Stories</h2>
            <p class="highlight-subtext">Discover the magic behind every moment we capture. Stay inspired with our latest blog posts.</p>
        </section>

        <section class="blogs">
            <section class="blog-wrapper-lg">
                <!-- single blog post -->
                <article class="blog">
                    <img src="images/blog1.jpg" alt="Blog 1">
                    <section class="blog-content">
                        <span class="badge">Photography</span>
                        <span class="misc-info">
                            Published: 1 Week Ago | 25 Comments
                        </span>
                        <h3 class="blog-title">
                            Best Photography Tips For Beginners
                        </h3>
                        <p class="blog-text">
                            Want to capture stunning images? Start with these essential beginner tips and elevate your photography game today.
                        </p>
                        <a href="#" class="btn">Read More</a>
                    </section>
                </article>
                <!-- end of single post -->

                <!-- single blog post -->
                <article class="blog">
                    <img src="images/blog2.jpg" alt="Blog 2">
                    <section class="blog-content">
                        <span class="badge">Wedding Moments</span>
                        <span class="misc-info">
                            Published: 2 Days Ago | 15 Comments
                        </span>
                        <h3 class="blog-title">
                            How We Capture Real Love Stories
                        </h3>
                        <p class="blog-text">
                            Discover our unique approach to photographing weddings and how we turn every shot into a timeless memory.
                        </p>
                        <a href="#" class="btn">Read More</a>
                    </section>
                </article>
                <!-- end of single post -->
            </section>

            <section class="blog-wrapper-sm">
                <!-- Additional blog posts -->
                <article class="blog">
                    <img src="images/blog3.jpg" alt="Blog 3">
                    <section class="blog-content">
                        <span class="badge">Behind the Lens</span>
                        <span class="misc-info">
                            Published: 4 Days Ago | 18 Comments
                        </span>
                        <h3 class="blog-title">
                            Meet Our Lead Photographer
                        </h3>
                        <p class="blog-text">
                            A personal journey into passion, photography, and the moments that shape Eternal Moments.
                        </p>
                        <a href="#" class="btn">Read More</a>
                    </section>
                </article>

                <article class="blog">
                    <img src="images/blog4.jpg" alt="Blog 4">
                    <section class="blog-content">
                        <span class="badge">Tips & Tricks</span>
                        <span class="misc-info">
                            Published: 1 Week Ago | 20 Comments
                        </span>
                        <h3 class="blog-title">
                            How Lighting Changes Everything
                        </h3>
                        <p class="blog-text">
                            Learn how the perfect light setup can transform a simple image into a captivating story.
                        </p>
                        <a href="#" class="btn">Read More</a>
                    </section>
                </article>

                <article class="blog">
                    <img src="images/blog5.jpg" alt="Blog 5">
                    <section class="blog-content">
                        <span class="badge">Client Stories</span>
                        <span class="misc-info">
                            Published: 3 Days Ago | 30 Comments
                        </span>
                        <h3 class="blog-title">
                            A Love Story in Paris
                        </h3>
                        <p class="blog-text">
                            One of our most enchanting pre-wedding shoots captured in the city of love.
                        </p>
                        <a href="#" class="btn">Read More</a>
                    </section>
                </article>

                <article class="blog">
                    <img src="images/blog6.jpg" alt="Blog 6">
                    <section class="blog-content">
                        <span class="badge">Editing Secrets</span>
                        <span class="misc-info">
                            Published: 5 Days Ago | 12 Comments
                        </span>
                        <h3 class="blog-title">
                            Our Go-To Editing Tools & Workflow
                        </h3>
                        <p class="blog-text">
                            Get a behind-the-scenes look at the tools and techniques we use to polish our photos to perfection.
                        </p>
                        <a href="#" class="btn">Read More</a>
                    </section>
                </article>
            </section>
        </section>
    </div>
</section>
<!-- end of main -->

        <!-- end of main -->


        <!-- footer -->
<footer class="footer">
    <section class="footer-container container">
        <article>
            <h2>Eternal Moments Photography</h2>
            <p>We believe in capturing genuine emotions and creating memories that last a lifetime. Trust us to make your wedding day unforgettable.</p>
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
