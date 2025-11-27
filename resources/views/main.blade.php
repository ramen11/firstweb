<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>

    <!-- shared stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/views.css') }}">
</head>
<body>
    <div class="page">
        <header class="site-header">
            <h1>Main</h1>
            <p class="subtitle">Choose an event</p>
        </header>

        <main class="content">
            <section class="card">
                <h2>Welcome to the main page</h2>

                <div class="container" style="margin-top:12px;">
                    <a class="btn-primary" style="display:inline-block; text-decoration:none;" href="{{ route('form.event1') }}">Event 1</a>

                    {{-- Uncomment / add more events as needed
                    <a class="btn-primary" style="display:inline-block; margin-left:8px; text-decoration:none;" href="{{ route('form.event2') }}">Event 2</a>
                    <a class="btn-primary" style="display:inline-block; margin-left:8px; text-decoration:none;" href="{{ route('form.event3') }}">Event 3</a>
                    --}}
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <small>&copy; {{ date('Y') }} My App</small>
        </footer>
    </div>
</body>
</html>