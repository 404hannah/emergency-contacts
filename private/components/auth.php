<?php
session_start();
header('Cache-Control: no-store');

if (!isset($_SESSION['user'])) {
    header('Location: login.php?msg=login_required');
    exit;
}
