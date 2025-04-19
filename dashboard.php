<?php
session_start();
include('config.php');

// Check if the user is logged in, if not, redirect to login
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Fetch the user's notes from the database
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM notes WHERE user_id='$user_id' ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
$notes = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <div class="sidebar">
            <h2>Agent Dashboard</h2>
            <ul>
                <li><a href="add_note.php">Add New Note</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="main-content">
            <h2>Welcome, Agent <?php echo $_SESSION['username']; ?>!</h2>
            <div class="notes-container">
                <h3>Your Notes</h3>
                <?php if (count($notes) > 0): ?>
                    <div class="notes-list">
                        <?php foreach ($notes as $note): ?>
                            <div class="note-card">
                                <h4><?php echo htmlspecialchars($note['title']); ?></h4>
                                <p><?php echo htmlspecialchars($note['content']); ?></p>
                                <span class="note-date"><?php echo date('F j, Y, g:i a', strtotime($note['created_at'])); ?></span>
                                <a href="edit_note.php?id=<?php echo $note['id']; ?>">Edit</a> | 
                                <a href="delete_note.php?id=<?php echo $note['id']; ?>" class="delete-note">Delete</a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <p>You have no notes yet. Add a new note to get started.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
