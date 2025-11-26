<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Home Page</h2>
    <a href="{{ route('register') }}">Register</a>
    
    @if (!Auth::check())
        <a href="{{ route('form.login') }}">Login</a>
    @else
        <a href="{{ route('form.logout') }}">Logout</a>

    
</body>
</html>