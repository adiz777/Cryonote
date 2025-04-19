<?php
session_start();
include('config.php');

// Redirect if not logged in
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $user_id = $_SESSION['user_id'];

    // Insert the note into the database
    $query = "INSERT INTO notes (user_id, title, content) VALUES ('$user_id', '$title', '$content')";
    if (mysqli_query($conn, $query)) {
        $success_message = 'Note created successfully!';
    } else {
        $error_message = 'Failed to create note. Please try again.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Note</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="note-container">
        <div class="note-box">
            <h2>Create New Note</h2>

            <?php if(isset($success_message)) { echo "<div class='success'>$success_message</div>"; } ?>
            <?php if(isset($error_message)) { echo "<div class='error'>$error_message</div>"; } ?>

            <form method="POST" action="">
                <label for="title">Note Title</label>
                <input type="text" name="title" id="title" required>

                <label for="content">Note Content</label>
                <textarea name="content" id="content" rows="6" required></textarea>

                <button type="submit">Create Note</button>
            </form>
        </div>
    </div>
</body>
</html>
