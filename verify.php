<!DOCTYPE html>
<html>
    <head>
        <?php include 'head.php';
        $active = ['-home','-product','-about','-contact','-account'];
        ?>
        <title>Verify Account</title>
    </head>
    <body>
      <?php include 'header.php';?>
      <div class="container-fluid text-center">
        <?php
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
    echo '
      <h1><br><br><br><br><br></h1>
  <h1 style="color:red;"><strong>404 Error: Page Not Found</h1>
  <p>The URL you have entered is invalid or has been moved</p>
  </div>';
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
echo '<h1 style="color:green;"><br><br><br><br><strong>SUCCESS: your account has been verified</h1></div>';
}else{
    echo '<h1 style="color:red;"><br><br><br><br><br><strong>FAILURE: invalid URL or account has already been verified</h1></div>';
}
?>
</body>
</html>
