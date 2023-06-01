<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <h1>Welcome to Laravel routing</h1>
    <ul>
        <li><a href="">Home</a></li>
        <li><a href="{{ route('about') }}">About Us</a></li>
    </ul>
    <p>{{ $colors[0] }}</p>
</body>
</html>