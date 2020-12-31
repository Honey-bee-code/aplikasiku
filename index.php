<?php
include 'auth.php';
if (!isset($_SESSION)) {
session_start();
}
$login = $_SESSION['login']; //harus pake isset untuk mengecek apakah variabel sudah diset atau belum
if ($login == 1) {
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasiku</title>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
    $level = $_SESSION['level'];
    if ($level == 1) { include 'menu_admin.php'; }
    if ($level == 2) { include 'menu_staff.php'; }
    ?>
</body>
</html>

<?php
} else {
    require 'login.php' ;
}
?>