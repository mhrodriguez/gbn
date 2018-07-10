<?php die("Access Denied"); ?>#x#a:2:{s:6:"output";s:0:"";s:6:"result";a:2:{s:6:"report";a:2:{i:0;a:6:{s:9:"intervals";s:10:"2017-11-01";s:10:"created_on";s:10:"2017-11-01";s:20:"order_subtotal_netto";s:8:"85.50000";s:21:"order_subtotal_brutto";s:8:"94.05000";s:14:"count_order_id";s:1:"1";s:16:"product_quantity";s:1:"1";}i:1;a:6:{s:9:"intervals";s:10:"2017-10-30";s:10:"created_on";s:10:"2017-10-30";s:20:"order_subtotal_netto";s:9:"256.50000";s:21:"order_subtotal_brutto";s:9:"282.15000";s:14:"count_order_id";s:1:"1";s:16:"product_quantity";s:1:"3";}}s:2:"js";s:1449:"
  google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Dia', 'Pedidos', 'Total de artículos vendidos', 'Ingreso neto'], ['2017-10-28', 0,0,0], ['2017-10-29', 0,0,0], ['2017-10-30', 1,3,256.50000], ['2017-10-31', 0,0,0], ['2017-11-01', 1,1,85.50000], ['2017-11-02', 0,0,0], ['2017-11-03', 0,0,0], ['2017-11-04', 0,0,0], ['2017-11-05', 0,0,0], ['2017-11-06', 0,0,0], ['2017-11-07', 0,0,0], ['2017-11-08', 0,0,0], ['2017-11-09', 0,0,0], ['2017-11-10', 0,0,0], ['2017-11-11', 0,0,0], ['2017-11-12', 0,0,0], ['2017-11-13', 0,0,0], ['2017-11-14', 0,0,0], ['2017-11-15', 0,0,0], ['2017-11-16', 0,0,0], ['2017-11-17', 0,0,0], ['2017-11-18', 0,0,0], ['2017-11-19', 0,0,0], ['2017-11-20', 0,0,0], ['2017-11-21', 0,0,0], ['2017-11-22', 0,0,0], ['2017-11-23', 0,0,0], ['2017-11-24', 0,0,0], ['2017-11-25', 0,0,0]  ]);
        var options = {
          title: 'Informe para el periodo de Sábado, 28 Octubre 2017 a Domingo, 26 Noviembre 2017',
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