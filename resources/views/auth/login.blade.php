<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login - Sportiva</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    min-height: 100vh;
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #e0f2fe, #f0fdf4);
    display: flex;
    align-items: center;
    justify-content: center;
}

/* CARD */
.login-card {
    width: 100%;
    max-width: 420px;
    padding: 40px;
    border-radius: 20px;
    background: rgba(255,255,255,0.85);
    backdrop-filter: blur(12px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.12);
}

/* LOGO */
.logo {
    text-align: center;
    font-size: 28px;
    font-weight: 700;
    color: #16a34a;
    margin-bottom: 10px;
}

/* TEXT */
.welcome-text {
    text-align: center;
    font-weight: 600;
    color: #444;
    margin-bottom: 25px;
}

/* INPUTS */
.form-control {
    height: 48px;
    border-radius: 12px;
    border: 1px solid #ddd;
    padding-left: 12px;
}

.form-control:focus {
    border-color: #16a34a;
    box-shadow: 0 0 0 0.15rem rgba(22,163,74,0.2);
}

/* BUTTON */
.btn-login {
    background: #16a34a;
    color: white;
    border: none;
    border-radius: 12px;
    padding: 12px;
    font-weight: 600;
    transition: 0.3s ease;
}

.btn-login:hover {
    background: #15803d;
    transform: translateY(-1px);
}

/* LINKS */
a {
    color: #16a34a;
    text-decoration: none;
    font-weight: 500;
}

a:hover {
    color: #15803d;
}

/* SMALL TEXT */
.small-text {
    font-size: 13px;
    color: #666;
}
</style>

</head>

<body>

<div class="login-card">

    <div class="logo">⚽ SPORTIVA</div>

    <div class="welcome-text">Welcome Back</div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- EMAIL -->
        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email"
                   name="email"
                   value="{{ old('email') }}"
                   class="form-control @error('email') is-invalid @enderror"
                   required
                   autofocus>

            @error('email')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <!-- PASSWORD -->
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password"
                   name="password"
                   class="form-control @error('password') is-invalid @enderror"
                   required>

            @error('password')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <!-- REMEMBER -->
        <div class="form-check mb-3">
            <input type="checkbox"
                   name="remember"
                   class="form-check-input"
                   id="remember"
                   {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                Remember Me
            </label>
        </div>

        <!-- LOGIN BUTTON -->
        <button type="submit" class="btn btn-login w-100">
            Login
        </button>

        <!-- FORGOT -->
        <div class="text-center mt-3 small-text">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    Forgot Password?
                </a>
            @endif
        </div>

        <!-- REGISTER -->
        <div class="text-center mt-2 small-text">
            Don’t have an account?
            <a href="{{ route('register') }}">Register</a>
        </div>

    </form>

</div>

</body>
</html>