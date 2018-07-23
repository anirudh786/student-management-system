<?php
	include('../dbcon.php');
	$rolno= $_POST['rollno'];
	$name= $_POST['name'];
	$city= $_POST['city'];
	$pcon= $_POST['pcon'];
	$std= $_POST['std']; 
	$id=$_POST['sid'];
	$imagename = $_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name'];
	
	
	$imagename =time().$_FILES['simg']['name'];
	if($tempname!=''){
	$tempname = $_FILES['simg']['tmp_name'];
		//echo $dir = $_SERVER['DOCUMENT_ROOT'].'/sms/dataimg/'.$imagename; exit;
		move_uploaded_file($tempname,$_SERVER['DOCUMENT_ROOT']."/sms/dataimg/$imagename"); 
	}
	
	$qry="UPDATE `student` SET `rollno` = '$rolno', `name` = '$name', `city` = '$city', `pcont` = '$pcon', `standard` = '$std', `image` = '$imagename' WHERE `id` = $id;";
	//echo $qry; exit;
	$run=mysqli_query($con,$qry);
	if($run==true){
		?>
		 <script> 
		  alert('Data updated Successfully');
		  <?php
		  header('http://localhost/sms/admin/updateform.php?sid=$id');
		  ?>
		  
		 </script>
		<?php
		
	}

?>