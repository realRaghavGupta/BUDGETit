// Google Charts API implementation
      google.charts.load('current', {'packages':['corechart', 'controls']});
      google.charts.setOnLoadCallback(drawDashboard);
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawLineChart);
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawDashboard() {

        var data = google.visualization.arrayToDataTable([
          ['Category', 'Amount'],
          ['Fun' , 50],
          ['Food', 100],
          ['Home', 350],
          ['Life', 200],
          ['Travel', 50],
          
        ]);

        var dashboard = new google.visualization.Dashboard(
            document.getElementById('dashboard_div'));

        var amountRangeSlider = new google.visualization.ControlWrapper({
          'controlType': 'NumberRangeFilter',
          'containerId': 'filter_div',
          'options': {
            'filterColumnLabel': 'Amount'

          }
        });

        var pieChart = new google.visualization.ChartWrapper({
          'chartType': 'PieChart',
          'containerId': 'chart_div',
          'options': {
            'width': 300,
            'height': 300,
            'pieSliceText': 'value',
            'legend': 'right'
          }
        });

        dashboard.bind(amountRangeSlider, pieChart);
        dashboard.draw(data);
      }

      function drawLineChart() {
        var data = google.visualization.arrayToDataTable([
          ['Week', 'Last month', 'This month'],
          ['Week 1',  300,      400],
          ['Week 2',  350,     200],
          ['Week 3',  200,       150],
          ['Week 4',  100,      100]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }

       function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Relation", "Amount", { role: "style" } ],
        ["You owe", 150, "#b87333"],
        ["You are owed", 75, "#b87333"],
        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Split summary",
        width: 400,
        height: 200,
        bar: {groupWidth: "50%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }