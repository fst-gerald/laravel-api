{
fetch(`/users/report${segment}/continentData`)
    .then(response => response.json())
    .then(data => {
        var options = {
            series: [{
            data: data.userByContinents
          }],
            chart: {
            type: 'bar',
            height: 350
          },
          plotOptions: {
            bar: {
              borderRadius: 4,
              horizontal: true,
            }
          },
          dataLabels: {
            enabled: false
          },
          xaxis: {
            categories: data.continents,
          }
          };
  
          var chart = new ApexCharts(document.querySelector("#continentChart"), options);
          chart.render();
    });
}