<?php
	session_start();
		
		if($_SESSION['uid'])
		{
			echo "";
		}
		else
		{
			header('location:../login.php');
		}

?>
<?php
	include('header.php');
	include('titlehead.php');

?>	
<form method="post" action="addstudent.php" enctype="mutipart/form-date">
	<table align="center" border="1" style="width:70%; margin-top:40px;">
	
		<tr>
			<th>Roll No</th>
			<td><input type="text" name="rollno" placeholder="Enter Rollno" required</td>
		</tr>
		<tr>
			<th>Full Name</th>
			<td><input type="text" name="name" placeholder="Enter Full Name" required</td>
		</tr>
		<tr>
			<th>City</th>
			<td><input type="text" name="city" placeholder="Enter city" required</td>
		</tr>
		<tr>
			<th>Parent Contact no</th>
			<td><input type="text" name="pcon" placeholder="Enter the Contact no of parents" required</td>
		</tr>
		<tr>
			<th>Standard</th>
			<td><input type="number" name="std" placeholder="Enter Standard" required</td>
		</tr>
		<tr>
			<th></th>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"</td>
		</tr>
		
	</table>
</form>
</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		
		include('../dbcon.php');
		$rolno= $_POST['rollno'];
		$name= $_POST['name'];
		$city= $_POST['city'];
		$pcon= $_POST['pcon'];
		$std= $_POST['std'];
		
		$qry="INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standard`) VALUES ('$rolno','$name','$city','$pcon','$std')";
		
		$run=mysqli_query($con,$qry);
		
		if($run==true)
		{
			?>
			<script>
				alert('Data inserted successfully');
			</script>
			<?php
		}
		
	}
?>
