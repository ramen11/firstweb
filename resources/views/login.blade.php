<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- shared stylesheet (no input fields changed) -->
    <link rel="stylesheet" href="{{ asset('css/views.css') }}">
</head>
<body>
    <div class="page">
        <header class="site-header">
            <h1>Welcome back</h1>
            <p class="subtitle">Sign in to your account</p>
        </header>

        <main class="content">
            <section class="card">
                <h2>Log in</h2>

                <form action ="{{route('form.login')}}" method ="POST" class="auth-form">
                    @csrf
                    <input name="name" type="text" placeholder="name">
                    <input name="email" type="text" placeholder="email">
                    <input name="password" type="text" placeholder="password">
                    <div class="form-actions">
                        <button class="btn-primary">Login</button>
                    </div>

                    <ul class="errors">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </form>
            </section>
        </main>

        <footer class="site-footer">
            <small>&copy; {{ date('Y') }} My App</small>
        </footer>
    </div>
</body>
</html>