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
    <title>Voicemail Settings</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Voicemail Settings</h1>
        <form action="update_voicemail.php" method="POST">
            <div class="form-group">
                <label for="greeting">Voicemail Greeting</label>
                <textarea name="greeting" id="greeting" rows="4" placeholder="Enter your voicemail greeting" required></textarea>
            </div>
            <div class="form-group">
                <label for="email_notifications">Enable Email Notifications</label>
                <select name="email_notifications" id="email_notifications" required>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <button type="submit" class="btn">Save Settings</button>
        </form>
        <a href="dashboard.php" class="btn">Back to Dashboard</a>
    </div>
</body>
</html>
