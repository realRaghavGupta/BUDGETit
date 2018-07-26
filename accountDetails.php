<?php
session_start();
if(empty($_SESSION['username']))
{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BUDGETit</title>
    <?php include "includes/header.php" ?>
  <?php $monthDetails = array("1"=>"January","2"=>"February","3"=>"March",
                      "4"=>"April","5"=>"May","6"=>"June","7"=>"July",
                        "8"=>"August","9"=>"September","10"=>"October",
                        "11"=>"November","12"=>"December");
    ?>
    <?php
    require  './Includes/accountDetailOp.php';
    require  './Includes/populatechat.php';
    $splitop = new AccountDetailsOp();
      $chartP = new ChartPopulate();
      if(isset($_POST['month']))
      {
        //echo "u are inside selected value";
        foreach ($monthDetails as $key => $value) {
          // code...
          if($key == $_POST['month'])
          {
            $monthName = $value;
          }
        }
        //fetch data from database and populate the card
     $owedAmount = $splitop->getSplitDetails($_POST['month'],$_SESSION['username']);
      //echo $owedAmount;
      $entry = $chartP->populateExpenseChart($_SESSION['username'],$_POST['month']);
        $entryLine= $chartP->populateBudgetChart($_SESSION['username']);

      }
      ?>
</head>
<body>

<!-- Nav Bar -->
<?php include "includes/navbar.php" ?>

<!--<div id="header"></div><br/>-->
<form data-toggle="validator" role="form" action="accountDetails.php" method="post">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Month</label>
        </div>

        <select class="custom-select" id="inputGroupSelect01" name="month" onchange="this.form.submit()">
          <?php
            foreach($monthDetails as $x => $xValue){

                echo '<option value="'.$x.'">'.$xValue.'</option>';
          } ?>
        </select>
          </div>

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
                        <h5 class="card-title">Month : </h5>
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
            <h5 class="card-title">Month : <?php echo $monthName; ?></h5>
            <p class="card-text">You are Owed Amount: <?php echo $owedAmount; ?> CAD</p>
        </div>
    </div>
</div>
</br>
</div>
  </form>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Category', 'Amount Spent ($)'],
             <?php echo $entry ?>
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
            ['Category', 'Amount Spent ($)'],
          <?php echo $entry; ?>
            // CSS-style declaration
        ]);

        var options = {
            title: "Account Details per Category for Month JUNE",
            width: 900,
            height: 300,
            bar: {groupWidth: "95%"},
            legend: { position: "none" },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnChart"));
        chart.draw(dataC, options);
    }
</script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['line']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Month', 'Budget Limit ($)', 'Expenses ($)'],
          <?php echo $entryLine; ?>
        ]);
      //  document.write(data);
        var options = {
            title: 'Budget Details for Year 2018',
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
