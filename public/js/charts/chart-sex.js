{
    fetch('/users/report/sexData')
        .then(response => response.json())
        .then(data => {
          var options = {
            series: data.userBySexes,
            chart: {
            type: 'donut',
          },
          labels: data.sexes,
          responsive: [{
            breakpoint: 480,
            options: {
              chart: {
                width: 200
              },
              legend: {
                position: 'bottom'
              }
            }
          }]
          };

          var chart = new ApexCharts(document.querySelector("#sexChart"), options);
          chart.render();
        });
    }