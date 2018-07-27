<?php
session_start();
if (empty($_SESSION['username'])) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BUDGETit</title>
    <?php include "includes/header.php" ?>
    <?php $monthDetails = array("1" => "January", "2" => "February", "3" => "March",
        "4" => "April", "5" => "May", "6" => "June", "7" => "July",
        "8" => "August", "9" => "September", "10" => "October",
        "11" => "November", "12" => "December");
    ?>
    <?php
    require './includes/accountDetailOp.php';
    require './includes/populatechat.php';
    require_once('includes/connection.php');
    require_once('includes/splitExpenseOp.php');
    $amt = $exp = $balance = $monthName = $msg = $owedAmount = "";
    $splitop = new AccountDetailsOp();
    $chartP = new ChartPopulate();
    if (isset($_POST['month'])) {
        $curr_month = $_POST['month'];
        $uname = $_SESSION['username'];
        $conn = new DatabaseConnection;
        $op = new splitOperation;
        $dbcon = $conn->connect();
        $uid = $op->getUser_id($uname, $dbcon);
        //echo "userid".$uid;
        $stmt = $dbcon->prepare("select sum(amount) as newamt from budget_table where user_id='$uid' and month='$curr_month'");
        $stmt1 = $dbcon->prepare("select sum(amount) as totexp from expense_table where user_id='$uid' and date='$curr_month'");
        //var_dump($curr_month);
        $stmt->execute();
        $stmt1->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $rows1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row) {
            $amt = $row['newamt'];
        }
        foreach ($rows1 as $row1) {
            $exp = $row1['totexp'];
        }
        $balance = $amt - $exp;
        if ($balance > 0) {
            $balance = "Remaining amount: $" . $balance;
            $msg = "Expenses for this month is in limit";
        } else {
            $balance = "Exceeded by: $" . abs($balance);
            $msg = "Expenses for this month has exceeded limit";
        }
        //echo "u are inside selected value";
        foreach ($monthDetails as $key => $value) {
            // code...
            if ($key == $_POST['month']) {
                $monthName = $value;
            }
        }
        //fetch data from database and populate the card
        $owedAmount = $splitop->getSplitDetails($_POST['month'], $_SESSION['username']);
        //echo $owedAmount;
        $entry = $chartP->populateExpenseChart($_SESSION['username'], $_POST['month']);
        $entryLine = $chartP->populateBudgetChart($_SESSION['username']);


    }
    ?>

</head>
<body>
<!-- Nav Bar -->
<?php include "includes/navbar.php" ?>

<!--<div id="header"></div><br/>-->
<form data-toggle="validator" action="accountDetails.php" method="post">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Month</label>
        </div>

        <select class="custom-select" id="inputGroupSelect01" name="month" onchange="this.form.submit()">
            <option value="0"> Choose a month to populate Data...</option>
            <?php
            foreach ($monthDetails as $x => $xValue) {

                echo '<option value="' . $x . '">' . $xValue . '</option>';
            } ?>
        </select>
    </div>
</form>
<div class="container-fluid" style="background-color:#CCD1D1">

    <div class="card bg-light mb-3" style="max-width: 100%">
        <!--Table and divs that hold the pie charts-->
        <table class="columns">
            <tr>
                <td>
                    <div id="curve_chart" style="border: 1px solid #ccc"></div>
                </td>
            </tr>
        </table>
    </div>
    <div class="card bg-light mb-3" style="max-width: 100%">
        <!--Table and divs that hold the pie charts-->
        <table class="columns">
            <tr>
                <td>
                    <div id="piechart" style="width: 60%; border: 1px solid #ccc"></div>
                </td>
                <td>
                    <div id="columnChart" style="width: 60%; border: 1px solid #ccc"></div>
                </td>
            </tr>
        </table>

    </div>
</div>

<div class="card-deck">
    <div class="card bg-light mb-3" style="max-width: 50%">
        <div class="card-header"><h3><b>Budget Details</b></h3></div>
        <table>
            <tr>
                <td>
                    <div class="card-body">

                        <h5 class="card-title">Month : <?php echo $monthName; ?></h5>
                        <p class="card-text">Budget Limit: $<?php echo $amt; ?></p>
                        <p class="card-text">Spent Amount: $<?php echo $exp; ?></p>
                        <p class="card-text"><?php echo $balance; ?></p>
                        <p class="card-text" style="color: green;"><?php echo $msg; ?></p>
                    </div>
                </td>
                <td>
                    <button type="button" class="btn btn-outline-primary"
                            onclick="window.location.href='setbudget.php'">Add Budget Limit
                    </button>

                    <button type="button" class="btn btn-outline-primary"
                            onclick="window.location.href='newaddexpense.php'" style="color:#0E2658;">Add Expense
                    </button>
                </td>
            </tr>
        </table>
    </div>
    <div class="card bg-light mb-3" style=" max-width: 50%">
        <div class="card-header"><h3><b>Split Details</b></h3></div>
        <div class="card-body">
            <h5 class="card-title">Month : <?php echo $monthName; ?></h5>
            <p class="card-text">You are Owed Amount: <?php echo $owedAmount; ?> CAD</p>
        </div>
    </div>
</div>

<script src="https://www.gstatic.com/charts/loader.js"></script>
<!--Worked by Sowmya Umesh (B00788667) -->
<script>
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Category', 'Amount Spent ($)'],
            <?php echo $entry ?>
        ]);
        var options = {
            title: 'Account Details per Category for Month <?php echo $monthName; ?>'
        };
        var piechart = new google.visualization.PieChart(document.getElementById('piechart'));
        piechart.draw(data, options);
    }
</script>
<!--Worked by Harika Ponnekanti (B00785817) -->
<script>
    google.charts.load('current', {'packages': ['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var dataC = google.visualization.arrayToDataTable([
            ['Category', 'Amount Spent ($)'],
            <?php echo $entry; ?>
            // CSS-style declaration
        ]);

        var options = {
            title: "Account Details per Category for Month <?php echo $monthName; ?>",
            width: 500,
            height: 500,
            bar: {groupWidth: "95%"},
            legend: {position: "none"},
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnChart"));
        chart.draw(dataC, options);
    }
</script>
<!--Worked by Mary Ann (B00783053) -->
<script>
    google.charts.load('current', {'packages': ['line']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Month', 'Budget Limit ($)', 'Expenses ($)'],
            <?php echo $entryLine; ?>
        ]);
        //  document.write(data);
        var options = {
            title: 'Budget Details for Year 2018',
            width: 1000,
            height: 300
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, google.charts.Line.convertOptions(options));
    }
</script>
</body>
</html>
