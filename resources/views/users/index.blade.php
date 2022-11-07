<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel API</title>
    </head>
    <body>
        <h2>Laravel API Demo</h2>
        <h4>Generate specific number of Users</h4>
        {{ Form::open(array('url' => 'users/add', 'method' => 'post')) }}
            {{ Form::number('numOfUsers', 15000) }}
            {{ Form::submit('Generate this num of users') }}
        {{ Form::close() }}
        <br/>
        <h4>Clean the database data</h4>
        {{ Form::open(array('url' => 'users/reset', 'method' => 'get')) }}
            {{ Form::submit('Clean') }}
        {{ Form::close() }}
    </body>
</html>
