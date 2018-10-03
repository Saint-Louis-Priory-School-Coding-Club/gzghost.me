<nav class="navbar navbar-inverse bg-inverse navbar-fixed-top navbar-expand-sm">
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-left">
      <li><a href="<?php $site?>">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Products <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php $site?>/product">Websites</a></li>
          <li><a href="<?php $site?>/product">Botnets</a></li>
          <li><a href="<?php $site?>/product">Free Downloads</a></li>
        </ul>
      </li>
      <li class="active"><a href="<?php $site?>/about">About Us</a></li>
      <li><a href="<?php $site?>/contact">Contact us</a></li>
    </ul>
    <?php if (isset($_SESSION['user']))  {
        echo '<ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <span
                            class="glyphicon glyphicon-user"></span>&nbsp;Logged
                        in: ' . $userRow["email"] . '
                        &nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://'. $site .'/user/dashboard"><span class="glyphicon glyphicon-dashboard"></span>&nbsp;Dashboard</a></li>
                        <li><a href="http://'. $site .'/login/logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a>
                        </li>
                    </ul>';
                  } else {
                    echo '
    <ul class="nav navbar-nav navbar-right">
      <li><a href="http://'. $site .'/login/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="http://'. $site .'/login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  ';}
    ?>
  </div>
</nav>
