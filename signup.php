<?php
session_start();
include('config.php');

// Handle the signup process
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if the passwords match
    if ($password !== $confirm_password) {
        $error_message = "Passwords do not match.";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check if the username already exists in the database
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error_message = "Username already taken.";
        } else {
            // Insert the new user into the database
            $query = "INSERT INTO users (username, password) VALUES (?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ss", $username, $hashed_password);
            if ($stmt->execute()) {
                $_SESSION['username'] = $username;
                header('Location: dashboard.php');
                exit();
            } else {
                $error_message = "There was an error creating your account. Please try again.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - CryoNote</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="signup-container">
        <h1>Create an Account</h1>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <?php if (isset($error_message)): ?>
                <p class="error-message"><?php echo $error_message; ?></p>
            <?php endif; ?>
            <button type="submit" name="signup">Sign Up</button>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>
