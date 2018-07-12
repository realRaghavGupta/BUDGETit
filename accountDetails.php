
<html xmlns:padding="http://www.w3.org/1999/xhtml">
<head>
    <!-- REFERENCES:
    BootStrap : https://getbootstrap.com/docs/4.1
    Image: https://goo.gl/images/iK8YWf
    javascript: https://www.w3schools.com/jsref/prop_email_multiple.asp
    Header: https://stackoverflow.com/questions/18712338/make-header-and-footer-files-to-be-included-in-multiple-html-pages
  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-4.1.1-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./bootstrap-4.1.1-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./addexpense.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>
    <script src="bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
    <title> Split Expense Page </title>
</head>
<body>

<!-- Nav Bar -->
<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="index.php">
        <!-- Brand Logo created using Photoshop -->
        <img src="images/logo.png" class="logo" alt="brand">
    </a>
    <div class="toggle">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseContents" aria-controls="collapseContents" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>


    <div class="collapse navbar-collapse navbar-toggleable-xs " id="collapseContents">

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
            <!--            <li class="nav-item active">-->
            <!--                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>-->
            <!--            </li>-->
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li> <li class="nav-item">
                <a class="nav-link" href="viewProfile.php">View Profile</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="newaddexpense.php">Add Expense</a>
                    <a class="dropdown-item" href="setbudget.php">Set Budget Limit</a>
                    <a class="dropdown-item" href="splitExpense.php">Split Expense</a>
                    <a class="dropdown-item" href="accountDetails.php">Account Details</a>
                    <!--                    <div class="dropdown-divider"></div>-->
                    <!--                    <a class="dropdown-item" href="#services">Others</a>-->
                </div>
            </li>
        </ul>
        <div class="nav-item navbar px-2">
            <button class="btn btn-outline-cus" data-toggle="modal" data-target="#login-modal">Login</button>
        </div>
        <div class="nav-item navbar px-2">
            <button class="btn btn-outline-cus" onclick="window.location.href='signup.php'">SignUp</button>
        </div>
    </div>
</nav>


<!--<div id="header"></div><br/>-->
<div class="container-fluid" style="background-color:#CCD1D1">
    </br>
    <div class="card bg-light mb-3" style="max-width: 100%">
        <div class="card-header"><h3><b>Account Details</b></h3></div>
        <div class="card-body" style=" align: center;">
            <div class="mySlides" id="piechart" style=" align: center; width: 900px; height: 300px;"></div>
            <div class="mySlides" id="columnChart"></div>
            <div class="mySlides" id="curve_chart" "width: 900px; height: 500px"></div>
    </div>
</div>
</br>
<div class="card-deck">
    <div class="card bg-light mb-3" style="max-width: 50%">
        <div class="card-header"><h3><b>Budget Details</b></h3></div>
        <table>
            <tr>
                <td>
                    <div class="card-body">
                        <h5 class="card-title">Month : June</h5>
                        <p class="card-text">Budget Limit: $1000</p>
                        <p class="card-text">Spent Amount: $900</p>
                        <p class="card-text">Remaining Amount: $100</p>
                        <p class="card-text" style="color: green;">Budget in Limit</p>
                    </div>
                </td>
                <td>
                    <button type="button" class="btn btn-outline-primary" style="color:#0E2658;">Add Budget Limit</button>
                    </br> </br> </br> </br>
                    <button type="button" class="btn btn-outline-primary" style="color:#0E2658;">Add Expense</button>
                </td>
            </tr>
        </table>
    </div>
    <div class="card bg-light mb-3" style=" max-width: 50%">
        <div class="card-header"><h3><b>Split Details</b></h3></div>
        <div class="card-body">
            <h5 class="card-title">Month : June</h5>
            <p class="card-text">You Owe Amount: $50</p>
            <p class="card-text">You are Owed Amount: $60</p>
            <p class="card-text" style="color: green;">Total Balance: $10</p>
        </div>
    </div>
</div>
</br>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Category', 'Amount Spent ($)'],
            ['Food',    50 ],
            ['Rent',      120],
            ['Groceries',  120],
            ['WIFI/TV', 40],
            ['Electricity', 70],
            ['General',70]
        ]);
        var options = {
            title: 'Account Details per Category for Month JUNE'
        };
        var piechart = new google.visualization.PieChart(document.getElementById('piechart'));
        piechart.draw(data, options);
    }
</script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var dataC = google.visualization.arrayToDataTable([
            ['Category', 'Amount Spent ($)', { role: 'style' }],
            ['Food', 50, '#A569BD'],            // RGB value
            ['Rent', 120, '#5499C7'],            // English color name
            ['Groceries', 120, '#48C9B0'],
            ['WIFI/TV', 40, 'color: #F4D03F' ],
            ['Electricity', 70, '#5D6D7E'],
            ['General', 70, 'black']
            // CSS-style declaration
        ]);

        var view = new google.visualization.DataView(dataC);
        view.setColumns([0, 1,
            { calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation" },
            2]);

        var options = {
            title: "Account Details per Category for Month JUNE",
            width: 900,
            height: 300,
            bar: {groupWidth: "95%"},
            legend: { position: "none" },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnChart"));
        chart.draw(view, options);
    }
</script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['line']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Month', 'Budget Limit ($)', 'Expenses ($)'],
            ['Jan',  1000,      850],
            ['Feb',  1150,      1000],
            ['Mar',  800,       900],
            ['Apr',  1200,      1100],
            ['May',  1300,      1350],
            ['Jun',  1000,      900],
            ['Jul',  1000,      0],
            ['Aug',  1000,      0],
            ['Sept',  1000,      0],
            ['Oct',  1000,      0],
            ['Nov',  1000,      0],
            ['Dec',  1000,      0]
        ]);
        var options = {
            title: 'Budget Details for Year 2018',
            width: 1000,
            height: 300
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, google.charts.Line.convertOptions(options));
    }
</script>
<script>
    var slideIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
        setTimeout(carousel, 3000);
    }
</script>
<script>
    $("#header").load("./header.html");
</script>
</body>
</html>

