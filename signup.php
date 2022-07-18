<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Register </title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('connect.php');
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($con,$username);
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Successfully registered</h3><br/>Click to <a href='login.php'>login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Register</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Tên đăng nhập" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Mật khẩu" required />
<input type="submit" name="submit" value="Đăng ký" />
</form>
</div>
<?php } ?>
</body>
</html>
