<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>
<body>

<!-- Display Welcome Message -->
<?php if (isset($_SESSION['welcome_msg'])): ?>
    <div id="welcomePopup" class="popup-message">
        <?= htmlspecialchars($_SESSION['welcome_msg']); ?>
    </div>
    <script>
        // Auto-hide popup after 3 seconds
        setTimeout(() => {
            const popup = document.getElementById('welcomePopup');
            if (popup) popup.style.display = 'none';
        }, 3000);
    </script>
    <?php unset($_SESSION['welcome_msg']); ?>
<?php endif; ?>

<?php include 'include/header.php'; ?>


<!-- main -->
<section class="section-one">
    <section class="container">
        <section class="sec-one-left">

            <article>
                <h3>Preserve Your Wedding Memories Forever</h3>
                <p>We are dedicated to creating timeless images that tell your unique love story. Let us be part of your
                    journey.</p>
                <a href="#" class="btn">view all</a>
            </article>
        </section>

        <section class="sec-one-right">
            <article class="work-content">
                <h3>About Eternal Moments Photography</h3>
                <p>At Eternal Moments Photography, we specialize in capturing beautiful, candid moments that tell a
                    story. Our expert photographers work with you to create stunning images that preserve the essence of
                    your most memorable occasions. Let us help you create memories that last a lifetime.</p>
                <a href="#" class="btn">view all</a>
            </article>
            <section class="work-imgs">
                <article class="work-img-1">

                </article>
                <article class="work-img-2">

                </article>
            </section>
            <p>"Every love story is beautiful, and we capture it in its purest form."</p>
        </section>
    </section>
</section>

<section class="section-two">
    <section class="container">
        <h2>FOLLOW ON INSTAGRAM</h2>
        <span>@eternal_moments_photography</span>
        <section class="insta-imgs">
            <article>
                <img src="images/insta-1.jpg" alt="Instagram photo 1">
                <section class="icon-overlay flex">
                    <i class="fab fa-instagram"></i>
                </section>
            </article>
            <article>
                <img src="images/insta-2.jpg" alt="Instagram photo 2">
                <section class="icon-overlay flex">
                    <i class="fab fa-instagram"></i>
                </section>
            </article>
            <article>
                <img src="images/insta-3.jpg" alt="Instagram photo 3">
                <section class="icon-overlay flex">
                    <i class="fab fa-instagram"></i>
                </section>
            </article>
            <article>
                <img src="images/insta-4.jpg" alt="Instagram photo 4">
                <section class="icon-overlay flex">
                    <i class="fab fa-instagram"></i>
                </section>
            </article>
        </section>
    </section>
</section>
<!-- end of main -->

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

<!--  authentication modal -->
<?php include 'include/auth_form.php'; ?>

<script src="script.js"></script>
</body>
</html>
