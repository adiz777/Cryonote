<?php
session_start();
include('config.php');

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if (isset($_GET['id'])) {
    $note_id = $_GET['id'];
    $query = "SELECT * FROM notes WHERE id='$note_id' AND user_id='" . $_SESSION['user_id'] . "' LIMIT 1";
    $result = mysqli_query($conn, $query);
    $note = mysqli_fetch_assoc($result);

    if (!$note) {
        header('Location: dashboard.php');
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    // Update the note in the database
    $query = "UPDATE notes SET title='$title', content='$content' WHERE id='$note_id' AND user_id='" . $_SESSION['user_id'] . "'";
    if (mysqli_query($conn, $query)) {
        header('Location: dashboard.php');
        exit;
    } else {
        $error_message = "Failed to update note.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Note - Secret Agent</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="edit-note-container">
        <h2>Edit Note</h2>
        <form method="POST" action="edit_note.php?id=<?php echo $note_id; ?>">
            <div class="input-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($note['title']); ?>" required>
            </div>
            <div class="input-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" rows="5" required><?php echo htmlspecialchars($note['content']); ?></textarea>
            </div>
            <?php if (isset($error_message)): ?>
                <p class="error"><?php echo $error_message; ?></p>
            <?php endif; ?>
            <button type="submit" class="edit-note-btn">Update Note</button>
        </form>
    </div>
</body>
</html>
