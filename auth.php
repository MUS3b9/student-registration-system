<?php
session_start();

/* زمن انتهاء الجلسة (بالثواني) */
$timeout_duration = 300; 
/* لو المستخدم ما مسجّل دخول */
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

/* لو في نشاط سابق */
if (isset($_SESSION['last_activity'])) {
    $inactive_time = time() - $_SESSION['last_activity'];

    if ($inactive_time > $timeout_duration) {
        // انتهت الجلسة
        session_unset();
        session_destroy();
        header("Location: login.php");
        exit();
    }
}

/* تحديث وقت آخر نشاط */
$_SESSION['last_activity'] = time();
?>
