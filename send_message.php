<?php 
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

include('db.php'); // Include database connection if needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Message</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Send Message</h1>
        <form action="process_message.php" method="POST">
            <div class="form-group">
                <label for="recipient">Recipient's Phone Number</label>
                <input type="tel" name="recipient" id="recipient" placeholder="Enter recipient's number" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="4" placeholder="Type your message here" required></textarea>
            </div>
            <button type="submit" class="btn">Send Message</button>
        </form>
        <a href="dashboard.php" class="btn">Back to Dashboard</a>
    </div>
</body>
</html>
