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
             <div class="avatar-display avatar-button" id="avatarDisplay">
              @if(Auth::user()->avatar)
                <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="avatar" class="avatar-preview" id="avatarPreview" />
              @else
                <div class="avatar-placeholder" id="avatarPlaceholder">
                  <!-- simple human icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v1h16v-1c0-2.761-3.582-5-8-5z"/>
                  </svg>
                </div>
              @endif
            </div>
            <h1>Welcome to my firstweb</h1>
            <p class="subtitle">Choose an event</p>
        </header>

        <main class="content">
            <section class="card">
                <h2>Events</h2>

                <div style="margin-top:8px; display:flex; justify-content:flex-end;">
                    <a class="btn-ghost" href="{{ route('form.settings') }}">Settings</a>
                </div>

                <div class="events-grid">
                    <a class="event-card" href="{{ route('form.event1') }}">
                        <h3>Event 1</h3>
                        <p>Quick details for event 1.</p>
                    </a>

                    <a class="event-card" href="{{ route('form.event2') }}">
                        <h3>Event 2</h3>
                        <p>Quick details for event 2.</p>
                    </a>

                    <a class="event-card" href="{{ route('form.event3') }}">
                        <h3>Event 3</h3>
                        <p>Quick details for event 3.</p>
                    </a>

                    <a class="event-card" href="{{ route('form.event4') }}">
                        <h3>Event 4</h3>
                        <p>Quick details for event 4.</p>
                    </a>

                    <a class="event-card" href="{{ route('form.event5') }}">
                        <h3>Event 5</h3>
                        <p>Quick details for event 5.</p>
                    </a>

                    <a class="event-card" href="{{ route('form.event6') }}">
                        <h3>Event 6</h3>
                        <p>Quick details for event 6.</p>
                    </a>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <small>&copy; {{ date('Y') }} firstweb</small>
        </footer>
    </div>
</body>
</html>