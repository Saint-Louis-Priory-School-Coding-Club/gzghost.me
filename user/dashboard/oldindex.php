<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <?php include 'setup.php'?>
        <link rel="icon" type="image/png" href="https://melbournechapter.net/images250_/sign-transparent-death.png">
    <title>Hello,<?php echo ' ' . $userRow['username']; ?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/index.css" type="text/css"/>
</head>
<body>
 <?php include 'header.php'?>
<div class="container">
    <!-- Jumbotron-->
    <div class="jumbotron">
        <h1>Hello, <?php echo $userRow['username']; ?></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at auctor est, in convallis eros. Nulla
            facilisi. Donec ipsum nulla, hendrerit nec mauris vitae, lobortis egestas tortor. </p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h2>Example body text</h2>
            <p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et
                magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
            <p>
                <small>This line of text is meant to be treated as fine print.</small>
            </p>
            <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
            <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
            <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>

        </div>


    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>