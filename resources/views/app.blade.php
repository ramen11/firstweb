<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- add the stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/views.css') }}">
</head>
<body>
    <div class="page">
        <header class="site-header">
            <h1>Hello there</h1>
            <p class="subtitle">Welcome — create an account</p>
        </header>

        <main class="content">
            <section class="card">
                <h2>Register</h2>

                <form action ="{{ route('form.register') }}" method="POST" class="auth-form">
                    @csrf

                    <label class="field">
                        <span class="label-text">Name</span>
                        <input name="name" type="text" placeholder="Your full name" required>
                    </label>

                    <label class="field">
                        <span class="label-text">Email</span>
                        <input name="email" type="email" placeholder="you@example.com" required>
                    </label>

                    <label class="field">
                        <span class="label-text">Password</span>
                        <input name="password" type="password" placeholder="Choose a password" required>
                    </label>

                    <label class="field">
                        <span class="label-text">Confirm</span>
                        <input name="password_confirmation" type="password" placeholder="Confirm password" required>
                    </label>

                    <div class="form-actions">
                        <button class="btn-primary">Register</button>
                    </div>

                    @if($errors->any())
                        <ul class="errors">
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                </form>
            </section>
        </main>

        <footer class="site-footer">
            <small>&copy; {{ date('Y') }} My App</small>
        </footer>
    </div>
</body>
</html>



