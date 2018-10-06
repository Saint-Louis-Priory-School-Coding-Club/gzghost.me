 <?php
    if(function_exists('mail')) {
    echo "PHP mail() function is enabled";
    }
    else {
    echo "PHP mail() function is not enabled";
    }
    $db_host = "localhost";
    $db_name = "id7292113_users";
    $db_user = "id7292113_gzghost";
    $db_pass = "#XFCE4life!";
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $email = 'test@test.com';
    $res = $conn->query('SELECT * FROM users WHERE email="test@test.com"');
    $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
    echo '<br>' . $userRow['username'];
 ?>
