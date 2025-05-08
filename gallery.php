<?php
include 'include/header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gallery</title>
        <meta name = "viewport" content = "width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "stylesheet" href = "simplelightbox-master/dist/simple-lightbox.css">
    </head>
    <body>

    <?php include 'include/header.php'; ?>
        

       <!-- main -->
<section class="section-three">
    <section class="container">
        <section class="gallery">
            <a href="images/gallery1.jpg">
                <article class="single-img">
                    <img src="images/gallery1.jpg" alt="gallery image">
                    <section class="single-img-content">
                        <h3>Beautiful Work</h3>
                    </section>
                </article>
            </a>

            <a href="images/gallery2.jpg">
                <article class="single-img">
                    <img src="images/gallery2.jpg" alt="gallery image">
                    <section class="single-img-content">
                        <h3>Beautiful Work</h3>
                    </section>
                </article>
            </a>

            <a href="images/gallery3.jpg">
                <article class="single-img">
                    <img src="images/gallery3.jpg" alt="gallery image">
                    <section class="single-img-content">
                        <h3>Beautiful Work</h3>
                    </section>
                </article>
            </a>

            <a href="images/gallery4.jpg">
                <article class="single-img">
                    <img src="images/gallery4.jpg" alt="gallery image">
                    <section class="single-img-content">
                        <h3>Beautiful Work</h3>
                    </section>
                </article>
            </a>

            <a href="images/gallery5.jpg">
                <article class="single-img">
                    <img src="images/gallery5.jpg" alt="gallery image">
                    <section class="single-img-content">
                        <h3>Beautiful Work</h3>
                    </section>
                </article>
            </a>

            <a href="images/gallery6.jpg">
                <article class="single-img">
                    <img src="images/gallery6.jpg" alt="gallery image">
                    <section class="single-img-content">
                        <h3>Beautiful Work</h3>
                    </section>
                </article>
            </a>

            <a href="images/gallery7.jpg">
                <article class="single-img">
                    <img src="images/gallery7.jpg" alt="gallery image">
                    <section class="single-img-content">
                        <h3>Beautiful Work</h3>
                    </section>
                </article>
            </a>

            <a href="images/gallery8.jpg">
                <article class="single-img">
                    <img src="images/gallery8.jpg" alt="gallery image">
                    <section class="single-img-content">
                        <h3>Beautiful Work</h3>
                    </section>
                </article>
            </a>

            <a href="images/gallery9.jpg">
                <article class="single-img">
                    <img src="images/gallery9.jpg" alt="gallery image">
                    <section class="single-img-content">
                        <h3>Beautiful Work</h3>
                    </section>
                </article>
            </a>
        </section>
    </section>
</section>
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
        
        <!-- LIGHTBOX -->
        <script src = "simplelightbox-master/dist/simple-lightbox.js"></script>

        <script src="script.js"></script>
    </body>
</html>
