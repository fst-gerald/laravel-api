<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel API</title>
        <style>
            .title {
                font-size: 20px;
            }

            .container {
                margin: auto !important;
                width: 70% !important;
                padding: 10px;
            }
        </style>
    </head>
    <body>
    <a href="/users">Visit User Generation Page</a>
        <h2>Report Page</h2>
        <div class="container">
            <p class="title">User Continent Analysis</p>
            <div id="continentChart"></div>


        <div style="width: 50%; float:left">
            <p class="title">User Sex/Gender Analysis</p>
            <div id="sexChart"></div>
        </div>
        <div style="width: 50%; float:right">
            <p class="title">User Age Analysis</p>
            <div id="ageChart"></div>
        </div>
        </div>

        <script type="text/javascript" src="{{URL::asset('js/apexCharts.js')}}"></script>

        <script type="text/javascript" src="{{URL::asset('js/charts/chart-continent.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/charts/chart-sex.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/charts/chart-age.js')}}"></script>
    </body>
</html>
