<?php
include "Includes/Header.php";
?>


    <!--reference: https://getbootstrap.com/docs/4.0/layout/overview/-->

    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>

        // Load Charts and the corechart package.
        google.charts.load('current', {'packages':['corechart']});

        // Draw the pie chart for Sarah's pizza when Charts is loaded.
        google.charts.setOnLoadCallback(drawSarahChart);

        // Draw the pie chart for the Anthony's pizza when Charts is loaded.
        google.charts.setOnLoadCallback(drawAnthonyChart);

        // Callback that draws the pie chart for Sarah's pizza.
        function drawSarahChart() {

            // Create the data table for Sarah's pizza.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Category');
            data.addColumn('number', 'Amount');
            data.addRows([
                ['Entertainment', 150],
                ['Food and Drink', 60],
                ['Home', 290],
                ['Life', 50],
                ['Transportation', 130],
                ['Utilities', 150],
                ['Uncategorized',10]
            ]);

            // Set options for Sarah's pie chart.
            var options = {title:'ACTUAL SUMMARY',
                width:550,
                height:300};

            // Instantiate and draw the chart for Sarah's pizza.
            var chart = new google.visualization.PieChart(document.getElementById('Sarah_chart_div'));
            chart.draw(data, options);
        }

        // Callback that draws the pie chart for Anthony's pizza.
        function drawAnthonyChart() {

            // Create the data table for Anthony's pizza.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Category');
            data.addColumn('number', 'Amount');
            data.addRows([
                ['Entertainment', 100],
                ['Food and Drink', 50],
                ['Home', 300],
                ['Life', 100],
                ['Transportation', 150],
                ['Utilities', 200],
                ['Uncategorized',20]
            ]);

            // Set options for Anthony's pie chart.
            var options = {title:'BUDGET SET',
                width:590,
                height:300};

            // Instantiate and draw the chart for Anthony's pizza.
            var chart = new google.visualization.PieChart(document.getElementById('Anthony_chart_div'));
            chart.draw(data, options);
        }
    </script>


<!--Table and divs that hold the pie charts-->
<table class="columns">
    <tr>
        <td><div id="Sarah_chart_div" style="border: 1px solid #ccc"></div></td>
        <td><div id="Anthony_chart_div" style="border: 1px solid #ccc"></div></td>
    </tr>
</table>


    <div class="card text-center">
    <div class="card-header bgcolor">
        Account Summary
    </div>
    </div>

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">Category</th>
        <th scope="col">Budget</th>
        <th scope="col">Actual</th>
        <th scope="col">Difference</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">Entertainment</th>
        <td>$100</td>
        <td>$150</td>
        <td>-$50</td>
    </tr>
    <tr>
        <th scope="row">Food and Drink</th>
        <td>$50</td>
        <td>$60</td>
        <td>-$10</td>
    </tr>
    <tr>
        <th scope="row">Home</th>
        <td>$300</td>
        <td>$290</td>
        <td>$10</td>
    </tr>
    <tr>
        <th scope="row">Life</th>
        <td>$100</td>
        <td>$50</td>
        <td>$50</td>
    </tr>
    <tr>
        <th scope="row">Transportation</th>
        <td>$150</td>
        <td>$130</td>
        <td>$20</td>
    </tr>
    <tr>
        <th scope="row">Utilities</th>
        <td>$200</td>
        <td>$150</td>
        <td>$50</td>
    </tr>
    <tr>
        <th scope="row">Uncategorized</th>
        <td>$25</td>
        <td>$10</td>
        <td>$15</td>
    </tr>
    </tbody>
</table>
</body>
</html>




<?php
/**
 * Created by PhpStorm.
 * User: Sowmya Umesh
 * Date: 6/22/2018
 * Time: 2:05 AM
 */