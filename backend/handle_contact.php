<?php
include 'db.php';
$pdo = $GLOBALS['pdo'];
$response = [];

// Check if the required form fields are set
if (isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['success'] = false;
        $response['message'] = 'Invalid email address.';
    } else {
        try {
            // Prepare and execute the SQL query to insert contact form data into the database
            $query = "INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$name, $email, $subject, $message]);

            // Simulate a successful form submission
            $response['success'] = true;
            $response['message'] = "Thanks for contacting $name, we will reach out to you soon.";
        } catch (PDOException $e) {
            // Handle database insertion error
            $response['success'] = false;
            $response['message'] = 'There was an error saving your message. Please try again later.';
            error_log('Database Error: ' . $e->getMessage()); // Log the error to the server logs
        }
    }
} else {
    // If any required field is missing
    $response['success'] = false;
    $response['message'] = 'Please fill in all fields.';
}

// Return the response as a JSON object
header('Content-Type: application/json');
echo json_encode($response);
exit();
