  <nav class="navbar navbar-inverse fixed-top navbar-expand-sm">
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-left">
      <li class="active"><a href="https://www.gzghost.me/">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Products <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="https://www.gzghost.me/product">Websites</a></li>
          <li><a href="https://www.gzghost.me/product">Botnets</a></li>
          <li><a href="https://www.gzghost.me/product">Free Downloads</a></li>
        </ul>
      </li>
      <li><a href="https://www.gzghost.me/about">About Us</a></li>
      <li><a href="https://www.gzghost.me/contact">Contact us</a></li>
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
                        <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a>
                        </li>
                    </ul>';
                  } else {
                    echo '
    <ul class="nav navbar-nav navbar-right">
      <li><a href="https://www.gzghost.me/login/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="https://www.gzghost.me/login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  ';}
    ?>
  </div>
</nav>
