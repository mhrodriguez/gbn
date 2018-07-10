<?php die("Access Denied"); ?>#x#a:2:{s:6:"output";s:0:"";s:6:"result";a:2:{s:6:"report";a:1:{i:0;a:6:{s:9:"intervals";s:10:"2017-11-28";s:10:"created_on";s:10:"2017-11-28";s:20:"order_subtotal_netto";s:10:"2581.72350";s:21:"order_subtotal_brutto";s:10:"2707.89585";s:14:"count_order_id";s:1:"1";s:16:"product_quantity";s:2:"11";}}s:2:"js";s:1448:"
  google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dia', 'Pedidos', 'Total de artículos vendidos', 'Ingreso neto'], ['2017-11-22', 0,0,0], ['2017-11-23', 0,0,0], ['2017-11-24', 0,0,0], ['2017-11-25', 0,0,0], ['2017-11-26', 0,0,0], ['2017-11-27', 0,0,0], ['2017-11-28', 1,11,2581.72350], ['2017-11-29', 0,0,0], ['2017-11-30', 0,0,0], ['2017-12-01', 0,0,0], ['2017-12-02', 0,0,0], ['2017-12-03', 0,0,0], ['2017-12-04', 0,0,0], ['2017-12-05', 0,0,0], ['2017-12-06', 0,0,0], ['2017-12-07', 0,0,0], ['2017-12-08', 0,0,0], ['2017-12-09', 0,0,0], ['2017-12-10', 0,0,0], ['2017-12-11', 0,0,0], ['2017-12-12', 0,0,0], ['2017-12-13', 0,0,0], ['2017-12-14', 0,0,0], ['2017-12-15', 0,0,0], ['2017-12-16', 0,0,0], ['2017-12-17', 0,0,0], ['2017-12-18', 0,0,0], ['2017-12-19', 0,0,0], ['2017-12-20', 0,0,0]  ]);
        var options = {
          title: 'Informe para el periodo de Miércoles, 22 Noviembre 2017 a Jueves, 21 Diciembre 2017',
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