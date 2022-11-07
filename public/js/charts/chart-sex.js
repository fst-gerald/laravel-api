{
    fetch('/users/report/sexData')
        .then(response => response.json())
        .then(data => {
          var options = {
            series: data.userBySexes,
            chart: {
            type: 'donut',
            width: "100%",
          },
          labels: data.sexes
          };

          var chart = new ApexCharts(document.querySelector("#sexChart"), options);
          chart.render();
        });
    }