<?php session_start();
$message = 1; ?>
<!DOCTYPE html>
<html>
<?php
include 'location.php';
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

if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['token']) && !empty($_GET['token'])){
  $email = trim($_GET['email']);
  $resethash =  trim($_GET['token']);
} else {
  include 'not-found-page.php';
  die();
}
$search = "SELECT email, resethash FROM users WHERE email='".$email."' AND resethash='".$resethash."'";
$result = $conn->query($search);
$match = $result->num_rows;

if($match > 0){
  if (isset($_POST['reset'])) {
$upass = trim($_POST['pass']);
$upassverify = trim($_POST['pass2']);
if ($upass==$upassverify) {
$upass = trim($_POST['pass']);
$password = hash('sha256', $upass);
$sql = "UPDATE users SET password='".$password."', resethash=NULL WHERE email='".$email."' AND resethash='".$resethash."'";
$query = $conn->query($sql);
$message = 'success';
} else {
  $message = 'passmatch';
}
}
}else{
    include 'not-found-page.php';
    die();
}
?>
<head>
  <link rel="icon" type="image/png" href="https://melbournechapter.net/images250_/sign-transparent-death.png"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Reset Password</title>
  <link rel="stylesheet" href="login/assets/css/bootstrap.min.css" type="text/css"/>
  <link rel="stylesheet" href="login/assets/css/style.css" type="text/css"/>
  <?php   include 'head.php';
  include 'header.php';
?>
</head>
<body>
  <br><br><br><br>
<div class="container text-center">
  <?php if($message == 'success') {
    echo '<h1 style="color:green;"><strong>SUCCESS: your password has been reset</strong></h1>';
  } else if ($message == 'passmatch') {
    echo '<h1 style="color:red;"><strong>FAILURE: Passwords do not match</strong></h1>';
  }?>
  <h1>Reset Password:</h1>
<form method="post" autocomplete="off">
<div class="form-group col-md-16">
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
        <input type="password" name="pass" class="form-control" placeholder="Enter New Password" required/>
    </div>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
        <input type="password" name="pass2" class="form-control" placeholder="Confirm New Password" required/>
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn    btn-block btn-primary" name="reset" id="reset">Reset Password</button>
</div>
</form>
</div>
</body>
</html>
