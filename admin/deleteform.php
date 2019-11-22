<?php

		include('../dbcon.php');
		
		$id=$_REQUEST['sid'];
		
		$qry="Delete FROM `student` WHERE id='$id'";
		
		$run=mysqli_query($con,$qry);
		
		if($run==true)
		{
			?>
			<script>
				alert('Data Deleted Successfully');
				window.open('deletestudent.php','_self');
			</script>
			<?php
		}
?>