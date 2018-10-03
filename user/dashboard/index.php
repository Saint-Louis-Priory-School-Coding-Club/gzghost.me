<?php include 'usercheck.php';?>
<!DOCTYPE html>
 <html>
<head>
    <?php include 'head.php'?>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2456504085812752",
    enable_page_level_ads: true
  });
</script>
<title>Welcome <?php echo $userRow['username']; ?></title>
</head>
<body>
<div class="jumbotron text-center">
<h1>Welcome to your dashboard <?php echo $userRow['username']; ?></h1>
<p>You can control all aspects of your account here</p>
</div>
</body>
 </html>
