<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register - Sportiva</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    margin: 0;
    min-height: 100vh;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #e0f2fe, #f0fdf4);
    display: flex;
    align-items: center;
    justify-content: center;
}

/* CARD */
.register-card {
    width: 100%;
    max-width: 360px;
    padding: 25px;
    border-radius: 18px;
    background: rgba(255,255,255,0.88);
    backdrop-filter: blur(12px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.10);
}

/* LOGO */
.logo {
    text-align: center;
    font-size: 24px;
    font-weight: 700;
    color: #22c55e;
    margin-bottom: 8px;
}

/* TITLE */
.title-text {
    text-align: center;
    font-weight: 600;
    color: #444;
    margin-bottom: 18px;
    font-size: 15px;
}

/* INPUTS */
.form-control {
    height: 42px;
    border-radius: 10px;
    border: 1px solid #ddd;
    font-size: 14px;
}

.form-control:focus {
    border-color: #22c55e;
    box-shadow: 0 0 0 0.15rem rgba(34,197,94,0.2);
}

/* BUTTON */
.btn-register {
    background: linear-gradient(45deg, #22c55e, #16a34a);
    border: none;
    border-radius: 10px;
    color: white;
    padding: 10px;
    font-weight: 600;
    font-size: 14px;
    transition: 0.3s ease;
}

.btn-register:hover {
    transform: translateY(-1px);
    opacity: 0.95;
}

/* LINKS */
a {
    color: #16a34a;
    text-decoration: none;
    font-weight: 500;
    font-size: 13px;
}

a:hover {
    color: #15803d;
}

/* SMALL TEXT */
.small-text {
    font-size: 12px;
    color: #666;
}
</style>

</head>

<body>

<div class="register-card">

    <div class="logo">⚽ SPORTIVA</div>

    <div class="title-text">Create Your Account</div>

    <!-- FORM (ANTI AUTOFILL) -->
    <form method="POST" action="{{ route('register') }}" autocomplete="off">
        @csrf

        <!-- HIDDEN FIELDS (extra autofill block) -->
        <input type="text" style="display:none" name="fake_user">
        <input type="password" style="display:none" name="fake_pass">

        <!-- NAME -->
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text"
                   name="name"
                   value="{{ old('name') }}"
                   class="form-control @error('name') is-invalid @enderror"
                   required
                   autocomplete="off">

            @error('name')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <!-- EMAIL -->
        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email"
                   name="email"
                   value="{{ old('email') }}"
                   class="form-control @error('email') is-invalid @enderror"
                   required
                   autocomplete="new-email">

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
                   required
                   autocomplete="new-password">

            @error('password')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <!-- CONFIRM PASSWORD -->
        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password"
                   name="password_confirmation"
                   class="form-control"
                   required
                   autocomplete="new-password">
        </div>

        <!-- BUTTON -->
        <button type="submit" class="btn btn-register w-100">
            Register
        </button>

        <!-- LOGIN -->
        <div class="text-center mt-3 small-text">
            Already have an account?
            <a href="{{ route('login') }}">Login</a>
        </div>

    </form>

</div>

</body>
</html>