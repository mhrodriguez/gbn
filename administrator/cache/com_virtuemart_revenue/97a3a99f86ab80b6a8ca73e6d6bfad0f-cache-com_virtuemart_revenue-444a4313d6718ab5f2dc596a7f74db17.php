<?php die("Access Denied"); ?>#x#a:2:{s:6:"output";s:0:"";s:6:"result";a:2:{s:6:"report";a:1:{i:0;a:6:{s:9:"intervals";s:10:"2017-12-22";s:10:"created_on";s:10:"2017-12-22";s:20:"order_subtotal_netto";s:9:"171.00000";s:21:"order_subtotal_brutto";s:9:"188.10000";s:14:"count_order_id";s:1:"1";s:16:"product_quantity";s:1:"2";}}s:2:"js";s:1442:"
  google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dia', 'Pedidos', 'Total de artículos vendidos', 'Ingreso neto'], ['2017-12-20', 0,0,0], ['2017-12-21', 0,0,0], ['2017-12-22', 1,2,171.00000], ['2017-12-23', 0,0,0], ['2017-12-24', 0,0,0], ['2017-12-25', 0,0,0], ['2017-12-26', 0,0,0], ['2017-12-27', 0,0,0], ['2017-12-28', 0,0,0], ['2017-12-29', 0,0,0], ['2017-12-30', 0,0,0], ['2017-12-31', 0,0,0], ['2018-01-01', 0,0,0], ['2018-01-02', 0,0,0], ['2018-01-03', 0,0,0], ['2018-01-04', 0,0,0], ['2018-01-05', 0,0,0], ['2018-01-06', 0,0,0], ['2018-01-07', 0,0,0], ['2018-01-08', 0,0,0], ['2018-01-09', 0,0,0], ['2018-01-10', 0,0,0], ['2018-01-11', 0,0,0], ['2018-01-12', 0,0,0], ['2018-01-13', 0,0,0], ['2018-01-14', 0,0,0], ['2018-01-15', 0,0,0], ['2018-01-16', 0,0,0], ['2018-01-17', 0,0,0]  ]);
        var options = {
          title: 'Informe para el periodo de Miércoles, 20 Diciembre 2017 a Jueves, 18 Enero 2018',
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