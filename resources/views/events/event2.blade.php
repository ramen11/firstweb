<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event 2</title>
    <link rel="stylesheet" href="{{ asset('css/views.css') }}">
</head>
<body>
    <div class="page">
        <header class="site-header">
            <h1>Event 2</h1>
            <p class="subtitle">Event details</p>
        </header>

        <main class="content">
            <section class="card">
                <h2>About this event</h2>
                <div class="p-block" style="margin-top:12px;">
                    <p>This is event 2 — brief description and details go here.</p>
                    <div style="margin-top:12px;">
                        <a class="btn-primary" href="{{ route('form.main') }}">Back to main</a>
                        <a class="btn-ghost" href="{{ route('form.settings') }}" style="margin-left:8px;">Settings</a>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <small>&copy; {{ date('Y') }} My App</small>
        </footer>
    </div>
</body>
</html>