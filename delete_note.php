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
    $user_id = $_SESSION['user_id'];

    // Delete the note from the database
    $query = "DELETE FROM notes WHERE id='$note_id' AND user_id='$user_id'";
    if (mysqli_query($conn, $query)) {
        header('Location: dashboard.php');
        exit;
    } else {
        header('Location: dashboard.php');
        exit;
    }
} else {
    header('Location: dashboard.php');
    exit;
}
