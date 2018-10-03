<?php

$db_host = "localhost";
$db_name = "id7292113_users";
$db_user = "id7292113_gzghost";
$db_pass = "#XFCE4life!";


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
