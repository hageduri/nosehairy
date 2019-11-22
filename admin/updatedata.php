<?php

		include('../dbcon.php');
		$rolno= $_POST['rollno'];
		$name= $_POST['name'];
		$city= $_POST['city'];
		$pcon= $_POST['pcon'];
		$std= $_POST['std'];
		$id = $_POST['sid'];
		
		$qry="UPDATE `student` SET `rollno` = '$rolno',`name` = '$name', `city` = '$city', `pcont` = '$pcon', `standard` = '$std' WHERE `student`.`id` = '$id';";
		
		$run=mysqli_query($con,$qry);
		
		if($run==true)
		{
			?>
			<script>
				alert('Data inserted successfully');
				window.open('updateform.php?sid=<?php echo $id;?>','_self');
			</script>
			<?php
		}
?>