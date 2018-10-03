<!DOCTYPE html>
<html>
    <head>
        <?php include 'head.php';?>
        <title>Verify Account</title>
    </head>
    <body>
        <?php include 'vheader.php';?>
        <div class="jumbotron text-center">
        <?php
$db_host = "localhost";
$db_name = "id7292113_users";
$db_user = "id7292113_gzghost";
$db_pass = "#XFCE4life!";
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    $stmt = $conn->prepare("SELECT email FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    $count = $result->num_rows;
}
            if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
}else{
    echo '<h1>Error 404: The page you entered does not exist</h1>';
die();
echo "you should not see this";
}
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    $email = trim($_GET['email']);
    $hash =  trim($_GET['hash']);
     $active =  0;
}
$search = "SELECT email, hash, active FROM users WHERE email='".$email."' AND hash='".$hash."' AND active='".$active."'";
$result = $conn->query($search);
$match = $result->num_rows;
if($match > 0){
$sql = "UPDATE users SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'";
$query = $conn->query($sql);
echo '<h1 style="color:green;">SUCCESS: your account has been verified</h1>';
}else{
    echo '<h1 style="color:red;">FAILURE: invalid URL or account has already been verified</h1>';
}
?>
</div>
</body>
</html>