<?php 
session_start(); 
if (!isset($_SESSION['user_id'])) { 
    header('Location: login.php'); 
    exit(); 
} 
include('db.php'); 

// Fetching user data
$user_id = $_SESSION['user_id']; 
$query = "SELECT * FROM users WHERE id = '$user_id'"; 
$result = mysqli_query($conn, $query); 
$user = mysqli_fetch_assoc($result); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            background: #f4f4f9;
            color: #333;
            line-height: 1.6;
            margin: 0;
        }

        /* Main Container */
        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 36px;
            color: #2e7d32;
        }

        .header p {
            font-size: 18px;
            color: #555;
        }

        /* Dashboard Features */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .feature-box {
            background: #f8f9fa;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .feature-box h3 {
            font-size: 22px;
            color: #2e7d32;
            margin-bottom: 15px;
        }

        .feature-box p {
            color: #777;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .feature-box a {
            display: inline-block;
            padding: 10px 20px;
            background: #43a047;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.2s ease;
        }

        .feature-box a:hover {
            background: #2e7d32;
        }

        /* Footer */
        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 14px;
            color: #666;
        }

        .footer a {
            color: #2e7d32;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 28px;
            }
            .feature-box h3 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Welcome, <?php echo htmlspecialchars($user['name']); ?>!</h1>
            <p>Your user ID: <?php echo htmlspecialchars($user['id']); ?></p>
        </div>

        <!-- Features -->
        <div class="features">
            <div class="feature-box">
                <h3>Profile</h3>
                <p>View and update your personal information.</p>
                <a href="profile.php">Manage Profile</a>
            </div>
            <div class="feature-box">
                <h3>Settings</h3>
                <p>Customize your account preferences.</p>
                <a href="settings.php">Account Settings</a>
            </div>
            <div class="feature-box">
                <h3>Logout</h3>
                <p>Exit your account securely.</p>
                <a href="logout.php">Logout Now</a>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; <?php echo date("Y"); ?> Your Company Name. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
