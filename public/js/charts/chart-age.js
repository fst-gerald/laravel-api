{
fetch('/users/report/ageData')
    .then(response => response.json())
    .then(data => {
        var options = {
            series: data.userByAges,
            chart: {
            width: 380,
            type: 'pie',
          },
          labels: data.ageRanges,
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
  
          var chart = new ApexCharts(document.querySelector("#ageChart"), options);
          chart.render();
    });
}