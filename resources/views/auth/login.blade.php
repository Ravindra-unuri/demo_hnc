<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <!-- Font Awesome for eye icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        /* Prevent inputs from overflowing when padding/border are added */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        .input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        .password-wrap {
            position: relative;
            margin-bottom: 20px;
        }

        .toggle-btn {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: 0;
            padding: 0;
            cursor: pointer;
            line-height: 0;
            /* removes extra height */
            color: #4CAF50;
            font-size: 18px;
        }

        .toggle-btn:focus {
            outline: 2px solid #4CAF50;
            outline-offset: 2px;
        }
    </style>
</head>

<body
    style="
  margin:0;padding:0;font-family:Arial,sans-serif;
  background:linear-gradient(to right,#4CAF50,#2E7D32);
  height:100vh;display:flex;justify-content:center;align-items:center;
">

    <div style="background:#fff;padding:40px;border-radius:12px;width:350px;box-shadow:0 8px 20px rgba(0,0,0,0.2);">
        <h2 style="text-align:center;color:#2E7D32;margin-bottom:20px;">Login</h2>

        @if ($errors->any())
            <p style="color:red;font-size:14px;text-align:center;">{{ $errors->first() }}</p>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label style="font-weight:bold;display:block;margin-bottom:6px;">Email:</label>
            <input type="email" name="email" required class="input" style="margin-bottom:15px;">

            <label style="font-weight:bold;display:block;margin-bottom:6px;">Password:</label>
            <div class="password-wrap">
                <input type="password" id="password" name="password" required class="input"
                    style="padding-right:40px;">
                <button type="button" id="togglePassword" class="toggle-btn" aria-label="Show password"
                    title="Show password">
                    <i class="fa-solid fa-eye"></i>
                </button>
            </div>

            <button type="submit"
                style="
        background:#4CAF50;color:#fff;border:none;padding:12px;width:100%;
        border-radius:6px;font-size:15px;font-weight:bold;cursor:pointer;transition:.3s;
      "
                onmouseover="this.style.background='#388E3C'" onmouseout="this.style.background='#4CAF50'">
                Login
            </button>
        </form>
    </div>

    <script>
        const toggleBtn = document.getElementById('togglePassword');
        const pwd = document.getElementById('password');
        toggleBtn.addEventListener('click', () => {
            const show = pwd.type === 'password';
            pwd.type = show ? 'text' : 'password';
            const icon = toggleBtn.querySelector('i');
            icon.classList.toggle('fa-eye', !show);
            icon.classList.toggle('fa-eye-slash', show);
            toggleBtn.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
            toggleBtn.setAttribute('title', show ? 'Hide password' : 'Show password');
        });
    </script>
</body>

</html>
