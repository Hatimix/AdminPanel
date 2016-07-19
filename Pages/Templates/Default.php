<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap & Css file -->
    <link href="Libs/css/bootstrap.min.css" rel="stylesheet">
    <link href="Libs/css/style.css" rel="stylesheet">

    <!-- Fonts -->
<!--    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="row" id="roww">
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <?php if (isset($nav)): ?>
            <nav class="navbar navbar-vertical">
                <div id="logo">
                    <h3><a href="/AdminPanel">Admin Area</a></h3>
                </div>
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Articles</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="Core/logout.php">Log out</a></li>
                </ul>
            </nav>
        <?php endif; ?>
    </div>
    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <section id="content">
            <?= $content; ?>
        </section>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="Libs/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="Libs/js/bootstrap.min.js"></script>
<script src="Libs/js/plugins.js"></script>
</body>
</html>