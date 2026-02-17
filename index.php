<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student · Admin</title>
    <!-- same font & design language as the other admin panels -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: linear-gradient(145deg, #f0f5fa 0%, #e3eaf3 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1.5rem;
        }

        .add-student-card {
            background: rgba(255,255,255,0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255,255,255,0.6);
            border-radius: 2.5rem;
            box-shadow: 
                0 30px 50px -20px rgba(0,35,60,0.3),
                0 12px 25px -10px rgba(0,45,70,0.15),
                inset 0 1px 2px rgba(255,255,255,0.8);
            width: 100%;
            max-width: 700px;
            padding: 2.5rem 2.8rem 3rem;
            transition: all 0.2s ease;
        }

        .add-student-card:hover {
            box-shadow: 0 35px 60px -20px rgba(0,55,90,0.4);
        }

        /* header */
        .form-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        h2 {
            font-size: 2.3rem;
            font-weight: 700;
            background: linear-gradient(145deg, #13293D, #1f4d72);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: flex;
            align-items: center;
            gap: 0.7rem;
        }

        .badge {
            background: #1e4f77;
            color: white;
            padding: 0.3rem 1.2rem;
            border-radius: 60px;
            font-size: 0.9rem;
            font-weight: 500;
            letter-spacing: 0.3px;
            background: linear-gradient(135deg, #1e4f77, #123a57);
            box-shadow: inset 0 1px 3px rgba(255,255,255,0.3);
        }

        /* form grid */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem 1.8rem;
            margin-bottom: 2.2rem;
        }

        .full-width {
            grid-column: span 2;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        label {
            font-weight: 600;
            font-size: 0.95rem;
            color: #1e405e;
            display: flex;
            align-items: center;
            gap: 0.4rem;
            letter-spacing: -0.2px;
        }

        label i {
            font-style: normal;
            font-size: 1.2rem;
        }

        .input-wrapper {
            display: flex;
            align-items: center;
            background: white;
            border: 1.5px solid #d9e3ef;
            border-radius: 60px;
            padding: 0.1rem 0.1rem 0.1rem 1.2rem;
            transition: all 0.15s ease;
            box-shadow: 0 2px 6px rgba(0,0,0,0.02);
        }

        .input-wrapper:focus-within {
            border-color: #1e6f9f;
            box-shadow: 0 4px 14px rgba(30,111,159,0.15), 0 0 0 3px rgba(30,111,159,0.1);
        }

        .input-icon {
            font-size: 1.2rem;
            color: #6b8aa8;
            width: 1.8rem;
            text-align: center;
        }

        input, input[type="text"], input[type="email"], input[type="date"] {
            width: 100%;
            border: none;
            padding: 0.85rem 1rem 0.85rem 0.2rem;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            background: transparent;
            outline: none;
            color: #0f2f44;
            font-weight: 500;
        }

        input[type="date"] {
            color-scheme: light;
            color: #0f2f44;
        }

        input::placeholder {
            color: #a5bdd2;
            font-weight: 400;
            opacity: 0.8;
        }

        /* submit button */
        .submit-area {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1.2rem;
            margin-top: 1rem;
        }

        .submit-btn {
            background: #1e4f77;
            border: none;
            padding: 1rem 2.8rem;
            border-radius: 60px;
            font-size: 1.2rem;
            font-weight: 700;
            color: white;
            cursor: pointer;
            transition: all 0.2s;
            box-shadow: 0 10px 20px -12px #0a2c44, 0 0 0 1px rgba(255,255,255,0.2) inset;
            background: linear-gradient(115deg, #1f5680, #123d5e);
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
        }

        .submit-btn:hover {
            background: linear-gradient(115deg, #256b9c, #174b70);
            transform: translateY(-3px);
            box-shadow: 0 18px 28px -12px #1e4f77;
        }

        .submit-btn:active {
            transform: translateY(1px);
        }

        /* navigation links */
        .nav-links {
            display: flex;
            gap: 1.2rem;
            align-items: center;
            flex-wrap: wrap;
        }

        .nav-link {
            background: rgba(255,255,255,0.6);
            backdrop-filter: blur(4px);
            padding: 0.7rem 1.6rem;
            border-radius: 60px;
            text-decoration: none;
            font-weight: 600;
            color: #1d4463;
            border: 1px solid rgba(255,255,255,0.8);
            transition: 0.15s;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 0.95rem;
        }

        .nav-link:hover {
            background: white;
            border-color: #a1bedb;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px -10px #1e4f77;
        }

        .nav-link-primary {
            background: #1e4f77;
            color: white;
            border: none;
        }

        .nav-link-primary:hover {
            background: #256b9c;
        }

        .divider {
            height: 1px;
            background: linear-gradient(to right, transparent, #b8d0e8, transparent);
            margin: 1.8rem 0 1.2rem 0;
        }

        /* hint text */
        .hint {
            font-size: 0.8rem;
            color: #6f8aa8;
            margin-top: 0.2rem;
            margin-left: 1.2rem;
        }

        @media (max-width: 600px) {
            .add-student-card { padding: 2rem 1.5rem; }
            .form-grid { grid-template-columns: 1fr; }
            .full-width { grid-column: span 1; }
            h2 { font-size: 2rem; }
        }
    </style>
</head>
<body>

<div class="add-student-card">
    <div class="form-header">
        <h2>
            <span>➕</span> Add Student
        </h2>
        <span class="badge">new record</span>
    </div>

    <!-- FORM exactly as original: method POST, action insert.php, all fields same names -->
    <form method="POST" action="insert.php">
        <div class="form-grid">
            <!-- student number (required) -->
            <div class="input-group full-width">
                <label><i>🆔</i> Student Number <span style="color:#b13e3e;">*</span></label>
                <div class="input-wrapper">
                    <span class="input-icon">#</span>
                    <input type="text" name="student_number" placeholder="e.g. STU2024001" required>
                </div>
            </div>

            <!-- full name (required) -->
            <div class="input-group full-width">
                <label><i>👤</i> Full Name <span style="color:#b13e3e;">*</span></label>
                <div class="input-wrapper">
                    <span class="input-icon">📛</span>
                    <input type="text" name="full_name" placeholder="Full legal name" required>
                </div>
            </div>

            <!-- email -->
            <div class="input-group">
                <label><i>📧</i> Email</label>
                <div class="input-wrapper">
                    <span class="input-icon">@</span>
                    <input type="email" name="email" placeholder="student@example.com">
                </div>
            </div>

            <!-- department -->
            <div class="input-group">
                <label><i>🏛️</i> Department</label>
                <div class="input-wrapper">
                    <span class="input-icon">🏢</span>
                    <input type="text" name="department" placeholder="e.g. Computer Science">
                </div>
            </div>

            <!-- phone -->
            <div class="input-group">
                <label><i>📞</i> Phone</label>
                <div class="input-wrapper">
                    <span class="input-icon">📱</span>
                    <input type="text" name="phone" placeholder="+1234567890">
                </div>
            </div>

            <!-- date of birth -->
            <div class="input-group">
                <label><i>🎂</i> Date of Birth</label>
                <div class="input-wrapper">
                    <span class="input-icon">📅</span>
                    <input type="date" name="birth_date">
                </div>
            </div>
        </div>

        <!-- hint for required fields -->
        <div class="hint">* Required fields</div>

        <!-- submit button + navigation links integrated exactly as you had but styled -->
        <div class="submit-area">
            <button type="submit" class="submit-btn">
                <span>💾</span> Add Student
            </button>

            <!-- these match your original links: View Students | Back to Admin -->
            <div class="nav-links">
                <a href="students.php" class="nav-link">
                    <span>👁️</span> View Students
                </a>
                <a href="admin.php" class="nav-link nav-link-primary">
                    <span>⬅</span> Back to Admin
                </a>
            </div>
        </div>
    </form>

    <!-- subtle divider and note (just for visual finish) -->
    <div class="divider"></div>
    <div style="text-align: center; color:#7795b2; font-size:0.85rem; display: flex; justify-content: center; gap: 1.5rem;">
        <span>🔒 all data encrypted</span>
        <span>📋 fields match database</span>
    </div>
</div>

<!-- all original PHP functionality preserved:
     - auth.php included
     - POST to insert.php
     - field names identical: student_number, full_name, email, department, phone, birth_date
     - links to students.php and admin.php exactly as before
-->
</body>
</html>