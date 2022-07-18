<?php
include("auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Web by lmbored</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Hi <?php echo $_SESSION['username']; ?>!</p>
<p>Welcome to my web</p>
<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>
