<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');
}
?>
 
 <!DOCTYPE HTML>
 <html lang="en_US">
 <head>
 <meta charset="UTF-8">
 <title>ADMIN LOGIN </title>
 <link rel="stylesheet" href="css/bootstrap.min.css" type=" text/css" >
 <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.m in.js"></script>
 <link rel="stylesheet" href="style.css" type=" text/css" >
 </head>
 <body style="background-color: gold; margin-top:100px;">
 
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
			 <li class="active"><a href="#">DASHBOARD</a></li>
			 <li><a href="#"><span class="glyphicon glyphicon-user"></span>ADMIN PROFILE</a></li>
			 <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>USERS</a></li>
			 <li><a href="#">DETAILS</a></li>
			 </ul>
		 </div>
	  </div>
	</nav>
 
      <h1 align="center">ADMIN LOGIN </h1>
	  <form action="login.php" method="post">
	     
		 <table align="center"> 
		    <tr>
			  <td> Username</td><td><input type="text" name="uname" required> </td>
			  
			</tr>
			 <tr>
			  <td> Password</td><td><input type="password" name="pass" required> </td>
			  
			</tr>
			<tr>
			  <td colspan="2" align="center"> <input type="submit" name="login" value="login"> </td>
			  
			</tr>
		 </table>
	  </form>
	  
	  <footer class="site-footer" style="background-color: black; padding:40px; margin-top:180px;">
	   
	
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
		     <div class="col-md-3"><center> COPYRIGHT 2018.. </center></div>
			 <div class="col-md-5"> 
			   <ul class="footer-nav">
			      <li> <a href="index2.html">       HOME </a> </li>
				  <li><a href="blog.html"> blog </a></li>
			        <li><a href="">contact us </a></li>
					 <li><a href=""> links </a></li>
			   </ul>
			   
			 </div>
		 
		 </div>
	  
	   </div>
	<p><center> ADMINISTRATION </center></p>
	</footer>
	  
	  
 </body>
 </html>
 <?php
 include('dbcon.php');
 if(isset($_POST['login']))
 {
	 $username = $_POST['uname'];
	 $password = $_POST['pass'];
	 
	 $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password';";
	 $run= mysqli_query($con,$qry);
	 $row = mysqli_num_rows($run);
	 if($row <1)
	 {
		 ?>
		 <script> 
		 alert('Username or Password not match');
         window.open('login.php','_self');
		 </script>
		 <?php
	 }
	 else{
		 $data=mysqli_fetch_assoc($run);
		// print_r($data);exit;
		 $id = $data['id'];
		 session_start();
		 $_SESSION['uid']=$id;
		 $_SESSION['username']=$data['username'];
		header('location:admin/admindash.php');
	 }
 }
 ?>
 