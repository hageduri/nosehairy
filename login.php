<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
		header('location:admin/admindash.php');
	}
?>
<!DOCTYPE HTML>
<html lan="en_US">
<head>
	<meta charset = "UTF-8">
	<title>Admin Login</title>
</head>
<body>

<h1 align="center">Admin Login</h1>
<form method="post" action="login.php">
<table align="center">
	<tr>
		<td align ="center">Username <input type="text" name="uname" required></td>
	</tr>
	<tr>
		<td align ="center">Password <input type="password" name="pass" required></td>
	</tr>
	<tr>
		<td colspan="2" align ="center"><input type="submit" name="login" value="Login"></td>
	</tr>

</form>
</body>
</html>
<?php
	include('dbcon.php');

	if(isset($_POST['login']))
	{
		$username = $_POST['uname'];
		$password = $_POST['pass'];
		
		$qry="SELECT * FROM `admin` WHERE username='$username'  AND password = '$password'";
		$run=mysqli_query($con,$qry);
		$row=mysqli_num_rows($run);
		if($row<1)
		{
			?>
			<script>
			alert('Username or Password not match !!');
			window.open('login.php','_self');
			</script>
			<?php
			
		}
		else
		{
			$data=mysqli_fetch_assoc($run);
			
			$id=$data['id'];
			
			
			
			$_SESSION['uid']=$id;
			header('location:admin/admindash.php');
		}
		
	}
?>