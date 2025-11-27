<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Home</title>
  <link rel="stylesheet" href="{{ asset('css/views.css') }}">
</head>
<body>
  <div class="page">
    <header class="site-header">
      <h1>Home</h1>
      <p class="subtitle">Get started</p>
    </header>

    <main class="content">
      <section class="card">
        <h2>Welcome</h2>

        <div style="margin-top:12px;" class="container">
          <a class="btn-primary" href="{{ route('form.login') }}">Login</a>
          <a class="btn-ghost" href="{{ route('form.register') }}">Register</a>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <small>&copy; {{ date('Y') }} My App</small>
    </footer>
  </div>
</body>
</html>