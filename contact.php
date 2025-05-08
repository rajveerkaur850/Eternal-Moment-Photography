<?php
include 'include/header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact US</title>
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>
<body>

<section class="section-five">
    <section class="container">
        <header class="contact-top">
            <h3>CONTACT Us</h3>
            <p>We’d love to hear from you! Get in touch for bookings, inquiries, or collaborations.</p>
        </header>

        <section class="contact-middle">
            <article>
                        <span class="contact-icon">
                            <i class="fas fa-map-signs"></i>
                        </span>
                <h4>Address</h4>
                <address>Main Street - 3456, California 0000</address>
            </article>

            <article>
                        <span class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </span>
                <h4>Contact Number</h4>
                <p>4567 3485 2902</p>
            </article>

            <article>
                        <span class="contact-icon">
                            <i class="fas fa-paper-plane"></i>
                        </span>
                <h4>Email Address</h4>
                <p><a href="mailto:contact@eternalmoments.com">contact@eternalmoments.com</a></p>
            </article>

            <article>
                        <span class="contact-icon">
                            <i class="fas fa-globe"></i>
                        </span>
                <h4>Website</h4>
                <p><a href="https://www.eternalmoments.com" target="_blank">www.eternalmoments.com</a></p>
            </article>
        </section>

        <footer class="contact-bottom">
            <section class="contact-bottom ">
                <form class="form" id="contactForm" action="backend/handle_contact.php" method="post" novalidate>
                <input type="text" name="name" placeholder="Your Name" required minlength="2">
                    <input type="email" name="email" placeholder="Your Email" required>
                    <input type="text" name="subject" placeholder="Subject" required minlength="3">
                    <textarea name="message" rows="9" placeholder="Message" required minlength="10"></textarea>
                    <input type="submit" class="btn" value="Send Message">
                </form>

                <!-- Popup content -->
                <aside id="popup" class="popup-overlay">
                    <article class="popup-content">
                        <p id="popupMessage">Thanks for contacting us, we will reach out to you soon.</p>
                        <button onclick="closePopup()" class="btn">Close</button>
                    </article>
                </aside>
            </section>


            <section aria-label="Google Map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509916.01527587!2d-123.79730890241156!3d37.18431437946637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2snp!4v1595133867574!5m2!1sen!2snp"
                        width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false"
                        tabindex="0"></iframe>
            </section>
        </footer>
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

<script src="script.js"></script>
</body>
</html>
