<nav class="navbar navbar-inverse bg-inverse navbar-fixed-top navbar-expand-md">
  <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo $site?>">GZGHost</a>
  </div>
  <div class="container-fluid navbar-collapse collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class='<?php echo $active[0] ?>'><a href="<?php echo $site ?>">Home</a></li>
      <li class="dropdown <?php echo $active[1] ?>"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Products <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo $site ?>/product">Websites</a></li>
          <li><a href="<?php echo $site ?>/product">Botnets</a></li>
          <li><a href="<?php echo $site ?>/product">Free Downloads</a></li>
        </ul>
      </li>
      <li class='<?php echo $active[2] ?>'><a href="<?php echo $site ?>/about">About Us</a></li>
      <li class='<?php echo $active[3] ?>'><a href="<?php echo $site ?>/contact">Contact us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php
      if($active[4] !== 'active') {
        echo '
        <li class="dropdown '. $active[4] .'">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <span class="glyphicon glyphicon-wrench"></span>&nbsp;Account <span class="caret"></span>&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <ul class="dropdown-menu">
        ';
      }
        if (isset($_SESSION['user']))  {
          echo '
          <li><a href="'. $site .'/user/dashboard"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Dashboard</a></li>
          <li><a href="'. $site . '/login/logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
          ';
        } else {
          echo '
          <li><a href="'. $site .'/login/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="'. $site .'/login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
          ';
        }
        if ($active[4] !== 'active') {
          echo '</ul>';
        }
        ?>
      </ul>
  </div>
</nav>
