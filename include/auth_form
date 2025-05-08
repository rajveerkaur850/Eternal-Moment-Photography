
<div class="popup-overlay" id="authPopup">
    <div class="popup-content">
        <button class="btn close-btn" id="closePopupBtn">X</button>
        <div class="tabs">
            <button class="tab-btn active" data-tab="loginTab">Login</button>
            <button class="tab-btn" data-tab="registerTab">Register</button>
        </div>

        <div class="tab-content" id="loginTab">
            <form class="form" method="POST" action="../backend/handle_auth.php">
                <!-- Login Form Error -->
                <?php if (isset($_SESSION['login_error'])): ?>
                    <div class="form-error" style="color: red; margin-bottom: 10px;">
                        <?= $_SESSION['login_error']; ?>
                    </div>
                    <?php unset($_SESSION['login_error']); // Clear the error after displaying it ?>
                <?php endif; ?>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login" class="btn">Login</button>
            </form>
        </div>

        <div class="tab-content hidden" id="registerTab">
            <form class="form" method="POST" action="../backend/handle_auth.php">
                <!-- Registration Form Error -->
                <?php if (isset($_SESSION['register_error'])): ?>
                    <div class="form-error" style="color: red; margin-bottom: 10px;">
                        <?= $_SESSION['register_error']; ?>
                    </div>
                    <?php unset($_SESSION['register_error']); // Clear the error after displaying it ?>
                <?php endif; ?>
                <input type="text" name="username" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="register" class="btn">Register</button>
            </form>
        </div>
    </div>
</div>
