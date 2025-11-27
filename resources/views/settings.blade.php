<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Settings</title>
  <link rel="stylesheet" href="{{ asset('css/views.css') }}">
</head>
<body>
  <div class="page">
    <header class="site-header">
      <h1>Settings</h1>
      <p class="subtitle">Manage your account</p>
    </header>

    <main class="content">
      <section class="card">
        <h2>Account</h2>

        <div style="margin-top:12px;" class="p-block">
          <p>Use the button below to log out of the app.</p>

          <div style="margin-top:12px;">
            <a class="btn-primary" href="{{ route('form.main') }}">Back to main</a>

            <form action="{{ route('form.logout') }}" method="POST" style="display:inline; margin-left:8px;">
              @csrf
              <button type="submit" class="btn-ghost">Logout</button>
            </form>
          </div>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <small>&copy; {{ date('Y') }} firstweb</small>
    </footer>
  </div>
</body>
</html>