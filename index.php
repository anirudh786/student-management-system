<!DOCTYPE HTML>
<html lang="en_US">
<head>
<meta charset="UTF-8">
<title>STUDENT MANAGEMENT SYSTEM</title>
 <link rel="stylesheet" href="css/bootstrap.min.css" type=" text/css" >
 <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.m in.js"></script>
 <link rel="stylesheet" href="style.css" type=" text/css" >
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
</head>
<body style="background-color: gold ; margin-top:100px; " >
    <nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container">
	     <div class="navbar-header">
		 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		 <span class="icon-bar"></span>
		 <span class="icon-bar"></span>
		 <span class="icon-bar"></span>
		 
		 </button>
		   <a href="#" class="navbar-brand"> STUDENT-MANAGEMENT-SYSTEM-HOME-PAGE </a>
		 </div>
		 <div class="collapse navbar-collapse" id="myNavbar">
		     <ul class="nav navbar-nav navbar-right">
			 <li class="active"><a href="#">HOME</a></li>
			 <li><a href="#"><span class="glyphicon glyphicon-user"></span>SIGN UP</a></li>
			 <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> LOG IN</a></li>
			 <li><a href="#">FORGOT PASSWORD</a></li>
			 </ul>
		 </div>
	  </div>
	</nav>
	
	<marquee bgcolor="pink" hspace=100px> STUDENT </marquee>

<h3 align="right"> <a href="login.php"> ADMIN LOGIN </a> </h3>
<h1 align="center"> WELCOME TO STUDENT MANAGEMENT SYSTEM</h1>
<form method="post" action="index4.php">
<table style="width:30%;" align="center" border="1">
   <tr>
    <td colspan="2" align="center">STUDENT INFO </td>
   </tr>
   <tr>
    <td align="right">Choose standard</td>
	<td>
	     <select name="std">
		 <option value="1">1st</option>
		 <option value="2">2nd</option>
		 <option value="3">3rd</option>
		 <option value="4">4th</option>
		 <option value="5">5th</option>
		 <option value="6">6th</option>
		 </select>
	</td>
   </tr>
   <tr> 
      <td align="right">Enter Rollno</td>
	  <td>
	  <input type="text" name="rollno" required>
	  </td>
   </tr>
   <tr>
     <td colspan="2" align="center"> <input type="submit" name="submit" value="Show Info">  </td >
   </tr>
</table>
</form>


	<footer class="site-footer" style="background-color: black; padding:40px; margin-top:100px;">
	   
	
	  <div class="container">
	     <div class"row">
		<div class="col-md-5">
		  <h4>CONTACT ADDRESS</h4>
		<address>
		  #999,STREET NO 6 <br>
		  NEW DELHI<br>
		  INDIA. <br>
		
		</address></div>

		 </div>
		 <div class="bottom-footer">
		     <div class="col-md-5"><center> COPYRIGHT 2018.. </center></div>
			 <div class="col-md-7"> 
			   <ul class="footer-nav">
			      <li> <a href="index2.html">       HOME </a> </li>
				  <li><a href="blog.html"> blog </a></li>
			        <li><a href="">contact us </a></li>
					 <li><a href=""> links </a></li>
			   </ul>
			      <ul>
				     <li><i class="fab fa-facebook-f"></i></li>
					 <li><i class="fab fa-instagram"></i></li>
					 <li><i class="fab fa-twitter-square"></i></li>
					 <li><i class="fab fa-whatsapp-square"></i></li>
					 <li><i class="fab fa-linkedin"></i></li>
				  </ul>
			   
			 </div>
		 
		 </div>
	  
	   </div>
	<p><center> ADMINISTRATION </center></p>
	</footer>


</body>
</html>

<?php
if(isset($_POST['submit'])){
	
	$standerd= $_POST['std'];
	$rollno= $_POST['rollno'];
	
	include('dbcon.php');
	include('function.php');
	showdetails($standerd,$rollno);
	
	
	
	
	
}

?>
