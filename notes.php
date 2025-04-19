<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php"); // Redirect to login if not authenticated
    exit;
}

$user = $_SESSION['user'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['note'])) {
    // Code to handle saving the note
    $note = $_POST['note'];
    file_put_contents("notes.txt", "$note\n", FILE_APPEND);  // Simple file-based storage
}

$notes = file("notes.txt"); // Get all saved notes
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryoNote - Notes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="notes-container">
        <h2>Welcome, <?php echo $user; ?></h2>
        <a href="logout.php">Logout</a>
        <h3>Your Notes</h3>
        <form method="POST" action="notes.php">
            <textarea name="note" placeholder="Write your note..." required></textarea>
            <button type="submit">Add Note</button>
        </form>

        <div class="notes-list">
            <h4>Saved Notes:</h4>
            <ul>
                <?php foreach ($notes as $note): ?>
                    <li><?php echo htmlspecialchars($note); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>
</html>
