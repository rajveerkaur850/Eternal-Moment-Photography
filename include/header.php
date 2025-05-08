<header class="header">
    <section class="nav-section">
        <section class="brand-and-navBtn">
            <figure class="brand-name">
                <img src="../images/logo2bg.png" alt="Eternal Moments Photography Logo" class="brand-logo">
            </figure>
            <button class="navBtn flex" aria-label="Toggle Navigation">
                <i class="fas fa-bars"></i>
            </button>
        </section>

        <nav class="top-nav" role="navigation">
            <ul>
                <li><a href="../index.php" class="active">Home</a></li>
                <li><a href="../gallery.php">Gallery</a></li>
                <li><a href="../blog.php">Blog</a></li>
                <li><a href="../services.php">Services</a></li>
                <li><a href="../contact.php">Contact</a></li>
                <!-- Conditionally display Login or Logout button -->
                <?php if (isset($_SESSION['user_id'])): ?>
                    <!-- If the user is logged in, show Logout button -->
                    <li><a href="../logout.php" class="logout-btn">Logout</a></li>
                <?php else: ?>
                    <!-- If the user is not logged in, show Login button -->
                    <li><a href="../index.php?popup=login" class="login-btn">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>

    </section>

    <section class="container about">
        <article class="about-content">
            <figure class="about-img flex">
                <img src="../images/logo2.png" alt="Logo img">
            </figure>
            <h2>Welcome to Eternal Moments Photography</h2>
            <h3>Capturing Love, One Moment at a Time</h3>
            <blockquote>
                "Photography is the story we fail to put into words. Let us frame your love in timeless memories. little
                things, long after you have forgotten everything."
                <footer>
                    <span>- Eternal Moments</span>
                </footer>
            </blockquote>
        </article>

        <aside class="social-icons">
            <ul>
                <li>
                    <a href="#" target="_blank" aria-label="Facebook">
                        <img src="../images/facebook-icon.png" alt="Facebook Icon">
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank" aria-label="Twitter">
                        <img src="../images/twitter-icon.png" alt="Twitter Icon">
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank" aria-label="Instagram">
                        <img src="../images/instagram-icon.png" alt="Instagram Icon">
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank" aria-label="YouTube">
                        <img src="../images/youtube-icon.png" alt="YouTube Icon">
                    </a>
                </li>
            </ul>
        </aside>
    </section>
</header>
