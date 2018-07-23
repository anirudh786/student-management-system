<?php
session_start();

 
		if(isset($_SESSION['uid']))
		{
			echo "" ;
			
		}
		else{
			header('location:http://localhost/sms/login.php');
		}
			

?> 
<!DOCTYPE HTML>
<html lang="en_US">
<head>
<meta charset="UTF-8">
<title>STUDENT MANAGEMENT SYSTEM  </title>


<link href="../css/style.css" rel="stylesheet" type="text/css">


</head>
<body>


<div class="admintitle" align="center">

<h4> 
<a href="admindash.php" style="float:left; margin-right:30px; color:#fff; font-size:20px;"> Back to Admin </a>
<a href="http://localhost/sms/logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;"> LOGOUT TO ADMIN PAGE</a>

</h4>
<h1>welcome to admin dashboard</h1>
</div>
<div class="admintitle" align="center" style="background-color: gold;">
<h4> <a href="http://localhost/sms/logout.php" style="float:right; margin-right:30px; color:black; font-size:20px;"> LOGOUT </a></h4>
</div>
<div class="dashboard" style="background-color: gold;" >
<table  style="width:50%;" align="center">
<tr>
<td> 1. </td>
<td><a href="addstudent.php"> 1->Insert Student Details </a></td>
</tr>
<tr>
<td> 2. </td>
<td><a href="updatestudent.php"> 2->Update Student Details</a></td>
</tr>
<tr>
<td> 3. </td>
<td><a href="deletestudent.php"> 3->Delete Student Details </a></td>
</tr>
</table>


</div>
</body>
</html>