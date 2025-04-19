<?php
session_start();

// Destroy session and log out the user
session_destroy();

// Redirect to login page
header('Location: login.php');
exit;
