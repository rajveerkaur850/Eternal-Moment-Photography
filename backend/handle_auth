<?php
require_once 'db.php';
session_start();
$pdo = $GLOBALS['pdo'];

// Registration Logic
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $username = htmlspecialchars(trim($_POST['username']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    if (!$email || strlen($password) < 8) {
        $_SESSION['register_error'] = "Invalid input. Ensure email is valid and password is at least 8 characters.";
        header("Location: /../index.php?popup=register");
        exit;
    }

    // Check if email or username already exists
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ? OR username = ?");
    $stmt->execute([$email, $username]);
    $exists = $stmt->fetchColumn();

    if ($exists > 0) {
        $_SESSION['register_error'] = "Username or email already exists.";
        header("Location: /../index.php?popup=register");
        exit;
    }

    // Register user
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $role = 'normal';

    try {
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)");
        $stmt->execute([$username, $email, $hashedPassword, $role]);
        header("Location: index.php?popup=login");
        exit;
    } catch (PDOException $e) {
        $_SESSION['register_error'] = "An unexpected error occurred. Please try again.";
        header("Location: /../index.php?popup=register");
        exit;
    }
}


// Login Logic
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    if (!$email) {
        $_SESSION['login_error'] = "Invalid email format.";
        header("Location: /../index.php?popup=login");
        exit;
    }

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['welcome_msg'] = "Welcome {$user['username']}, you are a {$user['role']} user.";
        header("Location: /../index.php"); // Redirect on success
        exit;
    } else {
        $_SESSION['login_error'] = "Invalid email or password.";
        header("Location: /../index.php?popup=login");
        exit;
    }
}
?>
