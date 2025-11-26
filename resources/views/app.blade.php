<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello there</h1><br><br>
    <div style="border: 3px solid black">
    <h2>Register</h2>
    <form action ="{{route ('form.register')}}" method ="POST">
        @csrf
        <input name="name" type="text" placeholder="name">
        <input name="email" type="text" placeholder="email">
        <input name="password" type="text" placeholder="password">
         <input name="password_confirmation" type="password" placeholder="Confirm Password" required>
        <button>Register</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </form>
    </div>
    <div style="border: 3px solid black">
    <h2>Login</h2>
    <form action ="/login" method ="POST">
        <input name="name" type="text" placeholder="name">
        <input name="email" type="text" placeholder="email">
        <input name="password" type="text" placeholder="password">
        <button>Login</button>
    </form>
    </div>
</body>
</html>



