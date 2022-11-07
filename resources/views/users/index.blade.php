<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel API</title>
    </head>
    <body>
        <h2>User Generation</h2>
        <p>Generate specific number of Users</p>
        {{ Form::open(array('url' => 'users/add', 'method' => 'post')) }}
            {{ Form::number('numOfUsers', 15000) }}
            {{ Form::submit('Generate this num of users') }} (tested upto 30k data)
        {{ Form::close() }}
        <br/>
        <p>Clean the database data</p>
        {{ Form::open(array('url' => 'users/reset', 'method' => 'get')) }}
            {{ Form::submit('Clean') }}
        {{ Form::close() }}

        <br/>
        <a href="users/report">Visit Report page</a>
    </body>
</html>
