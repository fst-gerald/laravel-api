<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel API</title>
    </head>
    <body>
        <h2>Laravel API Demo</h2>

        <h2>User Continent Analysis</h2>
        <div id="continentChart"></div>
        <div style="width: 30%; float:left">
            <h2>User Sex/Gender Analysis</h2>
            <div id="sexChart"></div>
        </div>
        <div style="width: 70%; float:right">
            <h2>User Age Analysis</h2>
            <div id="ageChart"></div>
        </div>

        <script type="text/javascript" src="{{URL::asset('js/apexCharts.js')}}"></script>

        <script type="text/javascript" src="{{URL::asset('js/charts/chart-continent.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/charts/chart-sex.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/charts/chart-age.js')}}"></script>
    </body>
</html>
