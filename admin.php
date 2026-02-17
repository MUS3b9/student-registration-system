<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel · Dashboard</title>
    <!-- same design language as login/signup pages for perfect consistency -->
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
            background: linear-gradient(145deg, #eef2f7 0%, #e3eaf2 100%);
            min-height: 100vh;
            padding: 2rem 1.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .dashboard-card {
            background: rgba(255,255,255,0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255,255,255,0.6);
            border-radius: 2.5rem;
            box-shadow: 
                0 30px 50px -20px rgba(0,30,50,0.3),
                0 10px 25px -8px rgba(0,40,60,0.15),
                inset 0 1px 2px rgba(255,255,255,0.8);
            width: 100%;
            max-width: 720px;
            padding: 2.5rem 2.8rem 3rem;
            transition: all 0.2s ease;
        }

        .dashboard-card:hover {
            box-shadow: 0 35px 60px -20px rgba(0,45,70,0.4);
        }

        /* header area with greeting and username pill */
        .panel-header {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 2.5rem;
            gap: 1.2rem;
        }

        h2 {
            font-size: 2.2rem;
            font-weight: 700;
            letter-spacing: -0.03em;
            background: linear-gradient(145deg, #13293D, #1f4d72);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        h2::before {
            content: "📋";
            font-size: 2rem;
            background: none;
            -webkit-text-fill-color: initial;
        }

        .user-greeting {
            background: rgba(23, 65, 104, 0.1);
            backdrop-filter: blur(4px);
            padding: 0.6rem 1.6rem 0.6rem 1.8rem;
            border-radius: 60px;
            border: 1px solid rgba(255,255,255,0.7);
            box-shadow: 0 6px 12px -10px #1e3b5c;
            font-weight: 500;
            color: #1a3d5c;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 1.05rem;
        }

        .user-greeting span {
            background: #1e4f77;
            color: white;
            padding: 0.25rem 1.1rem;
            border-radius: 40px;
            font-weight: 600;
            font-size: 0.95rem;
            letter-spacing: -0.2px;
            box-shadow: inset 0 1px 3px rgba(255,255,255,0.3);
        }

        /* stats / quick info cards (optional, but adds life) */
        .stats-row {
            display: flex;
            gap: 1.2rem;
            flex-wrap: wrap;
            margin-bottom: 2.8rem;
        }

        .stat-item {
            background: white;
            border-radius: 1.8rem;
            padding: 1.2rem 1.8rem;
            flex: 1 1 140px;
            border: 1px solid rgba(255,255,255,0.9);
            box-shadow: 0 6px 14px -12px #1a3852, 0 0 0 1px rgba(0,0,0,0.02);
            backdrop-filter: blur(4px);
            background: rgba(255,255,255,0.7);
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .stat-icon {
            font-size: 2rem;
            background: #eef4fa;
            width: 3rem;
            height: 3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .stat-info h3 {
            font-size: 1rem;
            font-weight: 500;
            color: #4f6e8a;
            margin-bottom: 0.2rem;
        }

        .stat-info p {
            font-size: 1.6rem;
            font-weight: 700;
            color: #0e3146;
            line-height: 1.2;
        }

        /* main management menu */
        .admin-menu {
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
            margin: 2rem 0 2.2rem;
        }

        .menu-item {
            background: white;
            border-radius: 1.8rem;
            transition: all 0.18s;
            border: 1px solid rgba(205, 222, 240, 0.6);
            background: rgba(255,255,255,0.7);
            backdrop-filter: blur(4px);
        }

        .menu-item a {
            display: flex;
            align-items: center;
            gap: 1.2rem;
            padding: 1.1rem 1.8rem;
            text-decoration: none;
            color: #1d405e;
            font-weight: 600;
            font-size: 1.2rem;
        }

        .menu-icon {
            font-size: 1.9rem;
            background: #dbe7f3;
            width: 3rem;
            height: 3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 1.2rem;
            transition: 0.15s;
        }

        .menu-item:hover {
            background: #ffffff;
            border-color: #8fb3d1;
            transform: translateX(6px) scale(1.01);
            box-shadow: 0 8px 20px -14px #1e4f77;
        }

        .menu-item:hover .menu-icon {
            background: #1e4f77;
            color: white;
        }

        .menu-badge {
            margin-left: auto;
            background: #d2e0ed;
            padding: 0.25rem 1rem;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 500;
            color: #1a3d5c;
        }

        /* logout row */
        .logout-section {
            margin-top: 2.5rem;
            display: flex;
            justify-content: flex-end;
            border-top: 1px dashed #bbd0e3;
            padding-top: 2rem;
        }

        .logout-btn {
            background: rgba(180, 200, 220, 0.4);
            border: 1px solid rgba(120, 150, 180, 0.3);
            padding: 0.9rem 2.5rem;
            border-radius: 60px;
            font-weight: 600;
            color: #153e5a;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            font-size: 1.1rem;
            backdrop-filter: blur(4px);
            transition: all 0.15s;
        }

        .logout-btn:hover {
            background: #aac0d6;
            border-color: #6e96b9;
            color: #0b2638;
            box-shadow: 0 6px 14px -8px #1e4f77;
            transform: scale(1.02);
        }

        .footer-note {
            text-align: center;
            margin-top: 2rem;
            color: #6f8aa5;
            font-size: 0.85rem;
            opacity: 0.8;
        }

        /* keeps PHP integration seamless */
        .cookie-username {
            font-weight: 700;
            background: #1e4f77;
            color: white;
            padding: 0.2rem 1.2rem;
            border-radius: 30px;
            display: inline-block;
        }
        
        @media (max-width: 550px) {
            .dashboard-card { padding: 1.8rem; }
            h2 { font-size: 1.9rem; }
            .panel-header { flex-direction: column; align-items: start; }
        }
    </style>
</head>
<body>

<?php
// auth.php already included, and we rely on cookie, but we also add a tiny
// fallback message if cookie not set (though auth.php should redirect)
if(!isset($_COOKIE['username'])) {
    // just in case, but auth.php should handle. we show a placeholder
    $displayName = 'Admin';
} else {
    $displayName = htmlspecialchars($_COOKIE['username']); // secure output
}
?>

<div class="dashboard-card">
    <!-- header with dynamic greeting (your exact php echo) -->
    <div class="panel-header">
        <h2>Admin panel</h2>
        <div class="user-greeting">
            <span>👋</span> Welcome, <span class="cookie-username"><?php echo $displayName; ?></span>
        </div>
    </div>


    <!-- main navigation menu exactly as requested, but designed -->
    <div class="admin-menu">
        <!-- Manage Students (students.php) -->
        <div class="menu-item">
            <a href="students.php">
                <span class="menu-icon">📚</span>
                Manage Students
                <span class="menu-badge">view all</span>
            </a>
        </div>
        <!-- Add Student (index.php) -->
        <div class="menu-item">
            <a href="index.php">
                <span class="menu-icon">➕</span>
                Add Student
                <span class="menu-badge">new</span>
            </a>
        </div>
        <!-- Logout is below in separate section but we also keep it here for consistency 
             but we also need to keep exactly the three links: we already have two, 
             and logout is separate. However to keep original three together we can 
             also add logout in menu and remove extra, but the spec said <ul> with three, 
             we keep them visible: Manage, Add, and Logout will appear as third item -->
        <div class="menu-item">
            <a href="logout.php">
                <span class="menu-icon">🚪</span>
                Logout
                <span class="menu-badge">exit</span>
            </a>
        </div>
    </div>

    <!-- this is an extra line that matches your original <ul> but redesigned.
         all three items are above. The original also had </ul> and then extra logout
         but we incorporated logout inside menu as third item, which is cleaner.
         If you prefer exactly three as listed, it's exactly there: 
         1. students.php, 2. index.php, 3. logout.php — all three in menu. 
         I also kept the separate logout section below for design symmetry, but it's optional.
         Actually, to keep 100% identical structure, the menu already has three links.
         But I'll also show a tiny logout section if you want redundancy. However I'll 
         comment that part to avoid duplication. I'll make logout appear only inside menu
         to follow the exact three items, and remove extra logout. But the original had:
         <ul> <li>Manage Students</li> <li>Add Student</li> <li>Logout</li> </ul>
         So the three are exactly inside .admin-menu. Perfect. 
         I'll remove the extra separate logout button to avoid double logout.
         But I'll leave the logout-section removed to keep clean. 
         However I keep the footer note.
    -->

    <!-- subtle footer with version or help link (does not interfere) -->
    <div class="footer-note">
        ⚙️ Admin area · secured access
    </div>

    <!-- If you still want the separate logout line for prominence, uncomment next small block:
    <div class="logout-section">
        <a href="logout.php" class="logout-btn">🚪 Logout from system</a>
    </div>
    -->

</div>

<!-- design matches login/signup exactly, php integration intact: 
     cookie username displayed safely, links to students.php, index.php, logout.php -->
</body>
</html>