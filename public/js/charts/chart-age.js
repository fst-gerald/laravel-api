{
fetch(`/users/report${segment}/ageData`)
    .then(response => response.json())
    .then(data => {
        var options = {
            series: data.userByAges,
            chart: {
            width: "90%",
            type: 'pie',
          },
          labels: data.ageRanges,
          };
  
          var chart = new ApexCharts(document.querySelector("#ageChart"), options);
          chart.render();
    });
}