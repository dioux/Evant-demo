<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventlol</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <style>
        body{
            padding-top: 60px;   
        }
        .inline-block{
            display: inline-block;
        }
    </style>
</head>
<body>
    @include('layouts.partials._menu')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>