<nav class="navbar navbar-inverse bg-inverse navbar-fixed-top navbar-expand-sm">
<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">GZGHost</a>
    </div>
  <div class="container-fluid navbar-collapse collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-left navbar-collapse">
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
    <?php if (isset($_SESSION['user']))  {
        echo '<ul class="nav navbar-nav navbar-right">
                <li class="dropdown '. $active[6] .'">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <span
                            class="glyphicon glyphicon-user"></span>&nbsp;Logged
                        in: ' . $userRow["email"] . '
                        &nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="'. $site .'/user/dashboard"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Dashboard</a></li>
                        <li><a href="'. $site . '/login/logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a>
                        </li>
                    </ul>';
                  } else {
                    echo '
    <ul class="nav navbar-nav navbar-right">
      <li class="'. $active[5] .'"><a href="'. $site .'/login/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li class="'. $active[4] .'"><a href="'. $site .'/login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  ';}
    ?>
  </div>
</nav>