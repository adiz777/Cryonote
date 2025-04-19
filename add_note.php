<?php
session_start();
include('config.php');

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $user_id = $_SESSION['user_id'];

    // Insert note into the database
    $query = "INSERT INTO notes (user_id, title, content) VALUES ('$user_id', '$title', '$content')";
    if (mysqli_query($conn, $query)) {
        header('Location: dashboard.php');
        exit;
    } else {
        $error_message = "Failed to add note.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Note - Secret Agent</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="add-note-container">
        <h2>Add New Note</h2>
        <form method="POST" action="add_note.php">
            <div class="input-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="input-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" rows="5" required></textarea>
            </div>
            <?php if (isset($error_message)): ?>
                <p class="error"><?php echo $error_message; ?></p>
            <?php endif; ?>
            <button type="submit" class="add-note-btn">Add Note</button>
        </form>
    </div>
</body>
</html>
