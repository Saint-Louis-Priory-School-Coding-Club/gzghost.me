<?php
ob_start();
session_start();
require_once 'dbconnect.php';
include '../head.php';
if (!isset($_SESSION['user'])) {
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <title>cpanel redirect</title>
        <meta http-equiv="Refresh" content="0; url='. $site . '/login/login.php">
    </head>
</html>';
} else {
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Dashboard</title>
        <meta http-equiv="Refresh" content="0; url='. $site .'/user/dashboard">
    </head>
</html>';
}
?>
