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

      <!-- Account Info -->
      <section class="card">
        <h2>Account</h2>

        <div style="margin-top:12px;" class="p-block">
          <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
          <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        </div>

        <div style="margin-top:12px;" class="p-block">
          <a class="btn-primary" href="{{ route('form.main') }}">Back to main</a>

          <form action="{{ route('form.logout') }}" method="POST" style="display:inline; margin-left:8px;">
            @csrf
            <button type="submit" class="btn-ghost" style="color:red;">Logout</button>
          </form>
        </div>
      </section>



      <!-- Update Profile -->
      <section class="card">
        <h2>Update Profile</h2>

        <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data" style="margin-top:12px;">
          @csrf

          <div class="avatar-wrapper" style="margin-bottom:10px;">
            <label class="avatar-button" id="avatarButton" for="avatarInput">
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
            </label>

            <div class="avatar-instructions">
              <div style="font-weight:600;">Profile image</div>
              <div style="font-size:0.86rem; margin-top:4px; color:var(--muted);"></div>
            </div>

            <input id="avatarInput" class="avatar-input" type="file" name="avatar" accept="image/*" />
          </div>

          <label class="label-text" style="margin-top:8px">Name</label>
          <input type="text" name="name" value="{{ Auth::user()->name }}" required>
          <label class="label-text" style="margin-top:8px">Email</label>
          <input type="email" name="email" value="{{ Auth::user()->email }}" required>
          <div class="form-actions" style="margin-top:12px;">
            <button class="btn-primary" type="submit">Update Profile</button>
          </div>
        </form>
        @if(session('status') == 'profile-updated')
          <p style="color:green; margin-top:10px;">Profile updated successfully.</p>
        @endif
      </section>

      
      <section class="card" style="margin-top:20px;">
        <h2>Change Password</h2>

        <form action="{{ route('settings.password') }}" method="POST" style="margin-top:12px;">
          @csrf

          <label>Current Password:</label><br/>
          <input type="password" name="current_password" class="input"><br/><br/>
          @error('current_password')
            <p style="color:red;">{{ $message }}</p>
          @enderror

          <label>New Password:</label><br/>
          <input type="password" name="new_password" class="input"><br/><br/>
          @error('new_password')
          <p style="color:red;">{{ $message }}</p>
          @enderror

          <label>Confirm New Password:</label><br/>
          <input type="password" name="new_password_confirmation" class="input"><br/><br/>
          @error('new_password_confirmation')
            <p style="color:red;">{{ $message }}</p>
          @enderror
          <div style="display:flex; justify-content:flex-end;">
            <button type="submit" class="btn-primary">Change Password</button>
          </div>
        </form>
          @if(session('status') == 'password-updated')
          <p style="color:green; margin-top:10px;">Password updated successfully.</p>
        @endif
      </section>



      <!-- Delete Account -->
      <section class="card" style="margin-top:20px; border-color:red;">
        <h2 style="color:red;">Delete Account</h2>

        <p>Warning: This action is irreversible. All your data will be permanently deleted.</p>

        <form action="{{ route('settings.delete') }}" method="POST"
              onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');"
              style="margin-top:12px;">
          @csrf
          @method('DELETE')

          <button type="submit" class="btn-danger">Delete Account</button>
        </form> 
      </section>

    </main>

    <footer class="site-footer">
      <small>&copy; {{ date('Y') }} firstweb</small>
    </footer>
  </div>

  <!-- add preview JS near bottom of file -->
  <script>
    (function () {
      const input = document.getElementById('avatarInput');
      const preview = document.getElementById('avatarPreview');
      const placeholder = document.getElementById('avatarPlaceholder');
      const button = document.getElementById('avatarButton');

      input.addEventListener('change', function () {
        const file = this.files && this.files[0];
        if (!file) return;

        const url = URL.createObjectURL(file);

        if (preview) {
          preview.src = url;
          preview.style.display = 'block';
        } else {
          const img = document.createElement('img');
          img.id = 'avatarPreview';
          img.className = 'avatar-preview';
          img.src = url;
          button.appendChild(img);
        }

        if (placeholder) placeholder.style.display = 'none';
      });

      // optional: cleanup objectURL after form submit
      document.querySelector('form[enctype="multipart/form-data"]').addEventListener('submit', function () {
        if (preview && preview.src && preview.src.startsWith('blob:')) {
          URL.revokeObjectURL(preview.src);
        }
      });
    })();
  </script>
</body>
</html>
