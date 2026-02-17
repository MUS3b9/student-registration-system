<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login · Modern</title>
    <!-- Google Font & simple reset for consistent look -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: linear-gradient(145deg, #f0f4fa 0%, #e6ecf4 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            margin: 0;
        }

        .login-card {
            background: rgba(255,255,255,0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.5);
            border-radius: 2rem;
            box-shadow: 
                0 20px 40px -12px rgba(0,20,40,0.25),
                0 8px 24px -6px rgba(0,32,64,0.1),
                inset 0 1px 1px rgba(255,255,255,0.6);
            width: 100%;
            max-width: 440px;
            padding: 2.5rem 2.2rem 2.8rem 2.2rem;
            transition: transform 0.2s ease;
        }

        .login-card:hover {
            transform: scale(1.01);
            box-shadow: 0 28px 48px -16px rgba(0,30,60,0.3);
        }

        h2 {
            font-size: 2rem;
            font-weight: 600;
            letter-spacing: -0.02em;
            margin-bottom: 0.4rem;
            color: #13293D;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }

        h2 span {
            background: #1e4a6d;
            color: white;
            font-size: 0.9rem;
            font-weight: 500;
            padding: 0.2rem 1rem;
            border-radius: 40px;
            letter-spacing: 0.3px;
            margin-left: 0.75rem;
            background: linear-gradient(135deg, #1e4a6d, #0f2f4a);
            box-shadow: inset 0 1px 2px rgba(255,255,255,0.3);
        }

        .sub-header {
            font-size: 0.95rem;
            color: #4b5f73;
            margin-bottom: 2.2rem;
            font-weight: 400;
            border-left: 3px solid #2b6c9e;
            padding-left: 1rem;
            background: rgba(43, 108, 158, 0.04);
            border-radius: 0 4px 4px 0;
        }

        .input-group {
            margin-bottom: 1.8rem;
        }

        label {
            font-size: 0.9rem;
            font-weight: 600;
            color: #1e3b5c;
            display: block;
            margin-bottom: 0.4rem;
            letter-spacing: -0.2px;
        }

        .input-wrapper {
            display: flex;
            align-items: center;
            background: white;
            border: 1.5px solid #d9e2ec;
            border-radius: 60px;
            padding: 0.1rem 0.1rem 0.1rem 1.5rem;
            transition: all 0.15s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.02);
        }

        .input-wrapper:focus-within {
            border-color: #1e6f9f;
            box-shadow: 0 4px 12px rgba(23,95,150,0.15), 0 0 0 3px rgba(30,111,159,0.15);
        }

        .input-wrapper i {
            color: #809ab3;
            font-size: 1.2rem;
            margin-right: 0.5rem;
            transition: color 0.15s;
        }

        .input-wrapper:focus-within i {
            color: #1e6f9f;
        }

        input {
            width: 100%;
            border: none;
            padding: 0.9rem 1rem 0.9rem 0.2rem;
            font-size: 1rem;
            font-family: 'Inter', sans-serif;
            background: transparent;
            outline: none;
            color: #0b2b40;
            font-weight: 500;
        }

        input::placeholder {
            color: #a7b9cc;
            font-weight: 400;
            font-size: 0.95rem;
            opacity: 0.7;
        }

        .login-btn {
            background: #0a2c3e;
            border: none;
            width: 100%;
            padding: 1rem;
            border-radius: 60px;
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            cursor: pointer;
            transition: all 0.2s;
            box-shadow: 0 8px 18px -6px #0a2c3e70, 0 0 0 1px rgba(255,255,255,0.1) inset;
            background: linear-gradient(115deg, #1f4e6f, #12344d);
            margin: 1rem 0 1.5rem 0;
            letter-spacing: 0.3px;
        }

        .login-btn:hover {
            background: linear-gradient(115deg, #225d82, #103b58);
            box-shadow: 0 12px 22px -8px #0a2c3e99, 0 0 0 1px rgba(255,255,255,0.2) inset;
            transform: translateY(-2px);
        }

        .login-btn:active {
            transform: translateY(1px);
            box-shadow: 0 4px 12px -4px #0a2c3e;
        }

        .footer-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 0.2rem;
            font-size: 0.95rem;
        }

        .footer-links a {
            text-decoration: none;
            font-weight: 500;
            transition: 0.1s;
            padding: 0.25rem 0;
        }

        .create-account {
            background: rgba(30, 106, 159, 0.08);
            padding: 0.5rem 1.2rem;
            border-radius: 40px;
            color: #1a577b;
            font-weight: 600;
            border: 1px solid rgba(30, 106, 159, 0.25);
            transition: all 0.15s;
        }

        .create-account:hover {
            background: #1e6a9f;
            color: white;
            border-color: #1e6a9f;
            text-decoration: none;
            box-shadow: 0 6px 14px -8px #1e6a9f;
        }

        .forgot-link {
            color: #4f6c87;
            font-size: 0.9rem;
            border-bottom: 1px dashed #b3c7db;
        }

        .forgot-link:hover {
            color: #0b2b40;
            border-bottom-style: solid;
        }

        .divider {
            margin: 1.5rem 0 0.8rem 0;
            border: none;
            height: 1px;
            background: linear-gradient(to right, transparent, #c0d2e4, transparent);
        }

        .meta-note {
            font-size: 0.8rem;
            text-align: center;
            color: #6e869f;
            margin-top: 1.2rem;
            background: rgba(255,255,255,0.5);
            padding: 0.3rem 0.8rem;
            border-radius: 40px;
            display: inline-block;
            width: auto;
            margin-left: auto;
            margin-right: auto;
            backdrop-filter: blur(4px);
        }

        /* simple icon replacement using mild UTF (or you could use font icons) */
        .input-wrapper .icon {
            font-size: 1.3rem;
            opacity: 0.8;
            width: 1.8rem;
            display: inline-block;
            text-align: center;
        }

        /* responsiveness */
        @media (max-width: 460px) {
            .login-card { padding: 2rem 1.5rem; }
            h2 { font-size: 1.8rem; }
            .footer-links { gap: 1rem; }
        }
    </style>
</head>
<body>

<div class="login-card">
    <h2>
        🔐 Admin
        <span>secure</span>
    </h2>
    <div class="sub-header">sign in to dashboard</div>

    <!-- FORM with exactly same structure (POST to login_process.php) -->
    <form method="POST" action="login_process.php">
        <!-- username field -->
        <div class="input-group">
            <label>Username</label>
            <div class="input-wrapper">
                <span class="icon">👤</span>
                <input type="text" name="username" placeholder="e.g. admin / demo" required>
            </div>
        </div>

        <!-- password field -->
        <div class="input-group">
            <label>Password</label>
            <div class="input-wrapper">
                <span class="icon">🔑</span>
                <input type="password" name="password" placeholder="••••••••" required>
            </div>
        </div>

        <!-- login button (exactly type="submit") -->
        <button type="submit" class="login-btn">Log in →</button>

        <!-- link area: both "create new account" and an optional forgotten? but kept exactly one as you had, but improved layout -->
        <div class="footer-links">
            <a href="signup.php" class="create-account">+ Create account</a>
            <a href="#" class="forgot-link">Forgot?</a>
            <!-- you can remove the "forgot?" if not needed, but adds symmetry. It's unobtrusive -->
        </div>

        <!-- subtle extra (keeps design balanced, does not interfere with functionality) -->
        <div class="divider"></div>
        <div class="meta-note">⚠️ demo: any credentials (design purpose)</div>
    </form>
</div>

<!-- no script, pure CSS, backend binding untouched (action="login_process.php", signup.php exactly as original) -->
</body>
</html>