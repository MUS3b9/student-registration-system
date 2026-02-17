<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up · Admin area</title>
    <!-- same font & design system as login page for perfect consistency -->
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
            background: linear-gradient(145deg, #f0f4fa 0%, #e2eaf3 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }

        .signup-card {
            background: rgba(255,255,255,0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.5);
            border-radius: 2rem;
            box-shadow: 
                0 20px 40px -12px rgba(0,25,45,0.25),
                0 8px 24px -6px rgba(0,32,64,0.1),
                inset 0 1px 1px rgba(255,255,255,0.6);
            width: 100%;
            max-width: 440px;
            padding: 2.5rem 2.2rem 2.8rem;
            transition: transform 0.2s ease;
        }

        .signup-card:hover {
            transform: scale(1.01);
            box-shadow: 0 28px 48px -16px rgba(0,40,70,0.3);
        }

        h2 {
            font-size: 2rem;
            font-weight: 600;
            letter-spacing: -0.02em;
            margin-bottom: 0.3rem;
            color: #13293D;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        h2 span {
            background: #1d543b;   /* fresh green to differentiate signup */
            color: white;
            font-size: 0.85rem;
            font-weight: 500;
            padding: 0.2rem 1rem;
            border-radius: 40px;
            letter-spacing: 0.3px;
            background: linear-gradient(135deg, #1d543b, #0f3d2b);
            box-shadow: inset 0 1px 2px rgba(255,255,255,0.3);
        }

        .sub-header {
            font-size: 0.95rem;
            color: #4b5f73;
            margin-bottom: 2rem;
            font-weight: 400;
            border-left: 3px solid #26734a;  /* green accent */
            padding-left: 1rem;
            background: rgba(33, 119, 70, 0.04);
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
            border-color: #26734a;  /* green to match signup accent */
            box-shadow: 0 4px 12px rgba(33, 119, 70, 0.15), 0 0 0 3px rgba(33, 119, 70, 0.15);
        }

        .input-wrapper .icon {
            font-size: 1.3rem;
            opacity: 0.8;
            width: 1.8rem;
            display: inline-block;
            text-align: center;
            color: #5f7d9c;
            transition: color 0.15s;
        }

        .input-wrapper:focus-within .icon {
            color: #26734a;
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

        .signup-btn {
            background: #0d3d2a;
            border: none;
            width: 100%;
            padding: 1rem;
            border-radius: 60px;
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            cursor: pointer;
            transition: all 0.2s;
            box-shadow: 0 8px 18px -6px #0d3d2a80, 0 0 0 1px rgba(255,255,255,0.1) inset;
            background: linear-gradient(115deg, #1f6e4a, #0e442f);
            margin: 0.8rem 0 1.2rem 0;
            letter-spacing: 0.3px;
        }

        .signup-btn:hover {
            background: linear-gradient(115deg, #258a58, #145738);
            box-shadow: 0 12px 22px -8px #0a3b28cc, 0 0 0 1px rgba(255,255,255,0.2) inset;
            transform: translateY(-2px);
        }

        .signup-btn:active {
            transform: translateY(1px);
            box-shadow: 0 4px 12px -4px #0a3b28;
        }

        .footer-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 0.5rem;
            font-size: 0.95rem;
        }

        .login-redirect {
            background: rgba(30, 90, 150, 0.08);
            padding: 0.5rem 1.2rem;
            border-radius: 40px;
            color: #1a577b;
            font-weight: 600;
            border: 1px solid rgba(30, 90, 150, 0.25);
            transition: all 0.15s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.2rem;
        }

        .login-redirect:hover {
            background: #1e6a9f;
            color: white;
            border-color: #1e6a9f;
            text-decoration: none;
            box-shadow: 0 6px 14px -8px #1e6a9f;
        }

        .privacy-note {
            color: #4f6c87;
            font-size: 0.85rem;
            border-bottom: 1px dashed #b3c7db;
            text-decoration: none;
        }

        .privacy-note:hover {
            color: #0b2b40;
            border-bottom-style: solid;
        }

        .divider {
            margin: 1.6rem 0 0.8rem 0;
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
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
            backdrop-filter: blur(4px);
        }

        /* extra spacing for original link replacement */
        .footer-links a {
            text-decoration: none;
        }

        @media (max-width: 460px) {
            .signup-card { padding: 2rem 1.5rem; }
            h2 { font-size: 1.8rem; }
        }
    </style>
</head>
<body>

<div class="signup-card">
    <h2>
        ✦ Sign up
        <span>new admin</span>
    </h2>
    <div class="sub-header">create your credentials</div>

    <!-- form stays identical to original: method POST, action signup_process.php -->
    <form method="POST" action="signup_process.php">
        <!-- username field (exactly as original, but enhanced) -->
        <div class="input-group">
            <label>Username</label>
            <div class="input-wrapper">
                <span class="icon">👤</span>
                <input type="text" name="username" placeholder="choose a username" required>
            </div>
        </div>

        <!-- password field (exactly as original) -->
        <div class="input-group">
            <label>Password</label>
            <div class="input-wrapper">
                <span class="icon">🔒</span>
                <input type="password" name="password" placeholder="strong password" required>
            </div>
        </div>

        <!-- Sign Up button (type="submit") -->
        <button type="submit" class="signup-btn">Create account →</button>

        <!-- link row: Already have an account? Login + optional extra (like terms) -->
        <div class="footer-links">
            <!-- this is the exact link from original, but redesigned -->
            <a href="login.php" class="login-redirect">← Already have an account? Login</a>
            <a href="#" class="privacy-note">privacy</a>
            <!-- you can replace the # with actual terms link if needed -->
        </div>

        <!-- subtle design line and message, just for style, does not interfere -->
        <div class="divider"></div>
        <div class="meta-note">🔐 secure signup · no spam</div>
    </form>
</div>

<!-- design perfectly aligned with login page, same icons, rounded inputs,
     but with a fresh green accent to differentiate signup context -->
</body>
</html>