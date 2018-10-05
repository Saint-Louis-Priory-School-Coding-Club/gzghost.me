<?php include 'usercheck.php';?>
<!DOCTYPE html>
 <html>
<head>
    <?php include 'head.php'?>
<title>Welcome <?php echo $userRow['username']; ?></title>
</head>
<body>
<div class="jumbotron text-center">
<h1>Welcome to your dashboard <?php echo $userRow['username']; ?></h1>
<p>You can control all aspects of your account here</p>
</div>
</body>
 </html>
