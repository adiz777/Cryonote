<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    if (!empty($title) && !empty($content)) {
        $safeTitle = preg_replace('/[^a-zA-Z0-9_-]/', '_', $title);
        $filePath = __DIR__ . '/notes/' . $safeTitle . '.txt';
        file_put_contents($filePath, $content);
    }
}

header('Location: dashboard.php');
exit;
