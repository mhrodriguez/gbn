<?php die("Access Denied"); ?>#x#a:2:{s:6:"output";s:0:"";s:6:"result";a:2:{s:6:"report";a:0:{}s:2:"js";s:1423:"
  google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'Orders', 'Total Items sold', 'Revenue net'], ['2017-08-29', 0,0,0], ['2017-08-30', 0,0,0], ['2017-08-31', 0,0,0], ['2017-09-01', 0,0,0], ['2017-09-02', 0,0,0], ['2017-09-03', 0,0,0], ['2017-09-04', 0,0,0], ['2017-09-05', 0,0,0], ['2017-09-06', 0,0,0], ['2017-09-07', 0,0,0], ['2017-09-08', 0,0,0], ['2017-09-09', 0,0,0], ['2017-09-10', 0,0,0], ['2017-09-11', 0,0,0], ['2017-09-12', 0,0,0], ['2017-09-13', 0,0,0], ['2017-09-14', 0,0,0], ['2017-09-15', 0,0,0], ['2017-09-16', 0,0,0], ['2017-09-17', 0,0,0], ['2017-09-18', 0,0,0], ['2017-09-19', 0,0,0], ['2017-09-20', 0,0,0], ['2017-09-21', 0,0,0], ['2017-09-22', 0,0,0], ['2017-09-23', 0,0,0], ['2017-09-24', 0,0,0], ['2017-09-25', 0,0,0], ['2017-09-26', 0,0,0]  ]);
        var options = {
          title: 'Report for the period from Martes, 29 2017 Agosto to Miércoles, 27 2017 Septiembre',
            series: {0: {targetAxisIndex:0},
                   1:{targetAxisIndex:0},
                   2:{targetAxisIndex:1},
                  },
                  colors: ["#00A1DF", "#A4CA37","#E66A0A"],
        };

        var chart = new google.visualization.LineChart(document.getElementById('vm_stats_chart'));

        chart.draw(data, options);
      }
";}}