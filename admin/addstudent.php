<?php
session_start();
//print_r($_SESSION['uid']);
 
		if(isset($_SESSION['uid']))
		{
			echo "" ;
			
		}
		else{
			header('location:../login.php');
		}
			

?> 
<?php
  include('header.php');
  include('titlehead.php');
?> 
<form method="post" action="addstudent.php" enctype="multipart/form-data">
<table border="1" style="width:85%; margin-top:40px;" align="center" >
<tr><th align="center">Roll No</th>
<td><input type="text" name="rollno" placeholder="Enter Rollno" required> </td>
</tr>
<tr><th align="center">Full Name </th>
<td><input type="text" name="name" placeholder="Enter Full Name" required> </td>
</tr>
<tr><th align="center">City </th>
<td><input type="text" name="city" placeholder="Enter city" required> </td>
</tr>
<tr><th align="center">Parents Contact </th>
<td><input type="text" name="pcon" placeholder="Enter contact no of parents" required> </td>
</tr>
<tr><th align="center">Standard </th>
<td><input type="number" name="std" placeholder="Enter Standard" required> </td>
</tr>
<tr><th align="center">Image </th>
<td><input type="file" name="simg"  required> </td>
</tr>
<tr> <td colspan="2" align="center"> <input type="submit" name="submit" value="Submit"> </td></tr>
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
	$imagename =time().$_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name'];
	//echo $dir = $_SERVER['DOCUMENT_ROOT'].'/sms/dataimg/'.$imagename; exit;
	move_uploaded_file($tempname,$_SERVER['DOCUMENT_ROOT']."/sms/dataimg/$imagename"); 
	$qry="INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standard`,`image`) VALUES ('$rolno','$name','$city','$pcon','$std','$imagename')";
	//echo $qry; exit;
	$run=mysqli_query($con,$qry);
	if($run==true){
		?>
		 <script> 
		  alert('Data Inerted Successfully');
		 </script>
		<?php
		
	}
}
	
?>




