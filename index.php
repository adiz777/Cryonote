<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryoNote - Secure Agent Notes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Landing Page Container -->
    <div class="landing-page-container">
        <div class="landing-content">
            <h1 class="main-title">CryoNote</h1>
            <p class="tagline">Mission Critical. Secure. Untraceable.</p>

            <div class="button-container">
                <!-- Login Button -->
                <a href="login.php" class="btn">Agent Login</a>
                <!-- Sign Up Button -->
                <a href="signup.php" class="btn">New Agent? Join Now</a>
            </div>

            <div class="about-section">
                <h2>About CryoNote</h2>
                <p>As a member of our covert operation team, your mission-critical notes are stored securely, away from prying eyes. Access your notes, secure classified data, and ensure the safety of your assignments with CryoNote—the ultimate agent note-taking tool. Your privacy is paramount.</p>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>© 2025 CryoNote - Powered by Classified Operations</p>
    </footer>

</body>
</html>
