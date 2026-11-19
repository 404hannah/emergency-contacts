<?php
session_start();
header('Cache-Control: no-store');

if (!isset($_SESSION['user'])) {
    header('Location: login.php?msg=login_required');
    echo "<script> alert('Log in to access the webbpage.'); </script>";
    exit;
}
