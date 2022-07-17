<?php
include("auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>WEB CƠ BẢN</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Xin chào <?php echo $_SESSION['username']; ?>!</p>
<p>Đây là trang chủ</p>
<p><a href="dashboard.php">Bảng điều khiển</a></p>
<a href="logout.php">Đăng xuất</a>
</div>
</body>
</html>
