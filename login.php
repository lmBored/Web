<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login </title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('connect.php');
	session_start();
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($con,$username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php");
            }else{
				echo "<div class='form'><h3>Invalid username or password</h3></br><a href='login.php'>Login again</a></div>";
				}
    }else{
?>
<div class="form">
<h1>Login</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Don't have an account? <a href='signup.php'>Register now</a></p><br/>

</div>
<?php } ?>
</body>
</html>
