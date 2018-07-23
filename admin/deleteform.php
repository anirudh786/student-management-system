<?php
	include('../dbcon.php');
	$id=$_REQUEST['sid'];

	
	$qry="DELETE FROM `student` WHERE `id`='$id';";
	//echo $qry; exit;
	$run=mysqli_query($con,$qry);
	if($run==true){
		?>
		 <script> 
		  alert('Data DELETED Successfully');
		  window.open('deletestudent.php','_self');
		 </script>
		<?php
		
	}



?>