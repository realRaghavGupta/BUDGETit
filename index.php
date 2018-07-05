
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>BUDGETit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top ">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">BUDGETit</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>

    </div>
</nav>
<div class="container padding" style="white-space:nowrap">
    <img src="images/logo.jpg" height="80px" width="80px" align="left">

    <h1  > <b> Manage Budget and Split bills </b> </h1>
</div>
<div class="container">
        <img src="images/wallet.jpg"  height="400" width="100%">
    <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a mattis sem, et auctor lorem. Nulla facilisi. Ut in venenatis ipsum. Vestibulum et porttitor sapien. Ut pretium libero tortor, eget mollis odio consectetur eu. Vivamus pretium elit eu lorem pulvinar, eget placerat dui tristique. Curabitur consectetur sapien vitae enim maximus interdum. Pellentesque ultrices sodales elit eu fermentum. Pellentesque dictum, tellus ut auctor posuere, metus eros laoreet metus, ut dictum nulla ex ac ante. In molestie justo eu iaculis accumsan. Praesent risus eros, posuere sit amet neque sit amet, scelerisque volutpat nibh.</strong>

    </p>

</div>

<div id="text" align="center"><h2> <b> Services We Offer: </b> </h2> </div>

<div class="row">
    <div class="col-md-4">
        <div class="thumbnail">
            <a href="acc_details.php">
                <img src="images/money.jpg"  height="100" width="80%">
                <div class="caption">
                   <h3>Accounnt Details</h3>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnail">
            <a href="#">
                <img src="images/piggybank.jpg"  height="100" width="80%">
                <div class="caption">
                    <h3>Set Budget</h3>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnail">
            <a href="#">
                <img src="images/presentation.jpg"  height="100" width="80%">
                <div class="caption">
                    <h3>Expenses</h3>
                </div>
            </a>
        </div>
    </div>
</div>
<?php include "footer.php"?>
</body>
</html>
