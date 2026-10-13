<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Company Login | EduNexa</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 1050px;
            min-height: 620px;
            background: #ffffff;
            border-radius: 24px;
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr 1fr;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
        }

        .login-info {
            background: #1d4ed8;
            color: #ffffff;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .logo {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .login-info h1 {
            font-size: 42px;
            line-height: 1.15;
            margin-bottom: 20px;
        }

        .login-info p {
            font-size: 16px;
            line-height: 1.7;
            opacity: 0.9;
            max-width: 420px;
        }

        .features {
            margin-top: 35px;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
            font-size: 15px;
        }

        .check {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.18);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-form-section {
            padding: 60px;
            
            align-items: center;
            justify-content: center;
        }

        .login-form {
            width: 100%;
            max-width: 390px;
        }

        .login-form h2 {
            font-size: 30px;
            color: #111827;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #6b7280;
            margin-bottom: 32px;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
        }

        .form-control {
            width: 100%;
            height: 50px;
            border: 1px solid #d1d5db;
            border-radius: 10px;
            padding: 0 15px;
            font-size: 14px;
            outline: none;
            transition: 0.2s;
        }

        .form-control:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.10);
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper .form-control {
            padding-right: 70px;
        }

        .toggle-password {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: transparent;
            color: #2563eb;
            cursor: pointer;
            font-size: 13px;
            font-weight: 600;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            font-size: 13px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 7px;
            color: #4b5563;
        }

        .forgot-password {
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
        }

        .login-button {
            width: 100%;
            height: 50px;
            border: none;
            border-radius: 10px;
            background: #2563eb;
            color: #ffffff;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
        }

        .login-button:hover {
            background: #1d4ed8;
        }

        .footer-text {
            text-align: center;
            color: #9ca3af;
            font-size: 12px;
            margin-top: 30px;
        }

        @media (max-width: 800px) {
            .login-wrapper {
                grid-template-columns: 1fr;
                max-width: 520px;
                min-height: auto;
            }

            .login-info {
                padding: 40px 30px;
            }

            .login-info h1 {
                font-size: 32px;
            }

            .features {
                display: none;
            }

            .login-form-section {
                padding: 40px 30px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 12px;
            }

            .login-wrapper {
                border-radius: 18px;
            }

            .login-info {
                padding: 30px 24px;
            }

            .login-info h1 {
                font-size: 28px;
            }

            .login-form-section {
                padding: 30px 24px;
            }

            .login-form h2 {
                font-size: 26px;
            }

            .form-options {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }
        }
  .alert-danger {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    width: 100%;
    box-sizing: border-box;
    padding: 14px 16px;
    margin-bottom: 24px;
    border: 1px solid #fca5a5;
    border-radius: 10px;
    background: #fef2f2;
    color: #991b1b;
}

.alert-icon {
    width: 22px;
    height: 22px;
    min-width: 22px;
    margin-top: 1px;
    border-radius: 50%;
    background: #dc2626;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
    font-weight: 700;
}

.alert-content {
    flex: 1;
}

.alert-content strong {
    display: block;
    margin-bottom: 5px;
    font-size: 14px;
    font-weight: 600;
    color: #991b1b;
}

.alert-content ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.alert-content li {
    position: relative;
    padding-left: 14px;
    margin-top: 3px;
    font-size: 13px;
    line-height: 1.5;
    color: #b91c1c;
}

.alert-content li::before {
    content: "•";
    position: absolute;
    left: 0;
}
.field-error {
    margin-top: 6px;
    font-size: 12px;
    color: #dc2626;
}
    </style>
</head>

<body>

<div class="login-wrapper">

    <div class="login-info">

        <div class="logo">
            EduNexa
        </div>

        <h1>
            Manage your schools smarter.
        </h1>

        <p>
            A powerful school management platform designed to manage
            schools, staff, students, fees, attendance and much more.
        </p>

        <div class="features">

            <div class="feature">
                <span class="check">✓</span>
                Multi-school management
            </div>

            <div class="feature">
                <span class="check">✓</span>
                Secure role-based access
            </div>

            <div class="feature">
                <span class="check">✓</span>
                Complete school management
            </div>

        </div>

    </div>


    <div class="login-form-section">
       @if ($errors->any())
    <div class="alert alert-danger">
        <div class="alert-icon">!</div>

        <div class="alert-content">
            <strong>Login failed</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

        <form class="login-form" method="POST" action="/company/login">
            @csrf
            <h2>Welcome Back</h2>

            <p class="subtitle">
                Sign in to your EduNexa company account
            </p>

            <div class="form-group">

                <label for="email">
                    Email Address
                </label>

                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email"  value="{{ old('email') }}">
@error('email')
    <div class="field-error">{{ $message }}</div>
@enderror
            </div>


            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <div class="password-wrapper">

                    <input
                        type="password"
                        id="password"
                          name="password"
                        class="form-control"
                        placeholder="Enter your password"
                    >
@error('password')
    <div class="field-error">{{ $message }}</div>
@enderror
                    <button
                        type="submit"
                        class="toggle-password"
                        onclick="togglePassword()"
                    >
                        Show
                    </button>

                </div>

            </div>


            <div class="form-options">

                <label class="remember">
                    <input type="checkbox">
                    Remember me
                </label>

                <a href="#" class="forgot-password">
                    Forgot Password?
                </a>

            </div>


            <button type="submit" class="login-button">
                Sign In
            </button>


            <div class="footer-text">
                © 2026 EduNexa. All rights reserved.
            </div>

        </form>

    </div>

</div>


<script>

    function togglePassword() {

        const password = document.getElementById('password');
        const button = document.querySelector('.toggle-password');

        if (password.type === 'password') {
            password.type = 'text';
            button.textContent = 'Hide';
        } else {
            password.type = 'password';
            button.textContent = 'Show';
        }

    }

</script>

</body>
</html>