<?php
   include_once 'config.php';
   include_once 'requiredfiles.php';

   ob_start();
   session_start();

   //kalau nak insert, kena pakai isset utk nak fetch variables yang disubmit
   if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
	   $reg_username = $_POST['reg_username'];
	   $reg_password = $_POST['reg_password'];
       $reg_email    = $_POST['reg_email'];
       $reg_fullname = $_POST['reg_fullname'];

       //sebelum insert into, kena masukkan sekali panggilan connection ke db... dalam kes ni nama dia adalah $db (boleh rujuk config.php)
   	   $query = mysqli_query($db,"INSERT INTO login(username,password,email,fullname) VALUES('$reg_username','$reg_password','$reg_email','$reg_fullname')");

       echo "<br/><br/><span>Data Inserted successfully...!!</span>";
   }
   else
   {
       echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
   }
mysqli_close($db); // Closing Connection with Server


   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MyTasks</title>
</head>

<body>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">register</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="register-form" class="text-left" method="post" action="registration.php" autocomplete="off">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="reg_username" class="sr-only">Username</label>
						<input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="username" pattern="[a-zA-Z ]{5,}" maxlength="10">
					</div>
					<div class="form-group">
						<label for="reg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
					</div>
					<div class="form-group">
						<label for="reg_password_confirm" class="sr-only">Password Confirm</label>
						<input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password">
					</div>
					
					<div class="form-group">
						<label for="reg_email" class="sr-only">Email</label>
						<input type="email" class="form-control" id="reg_email" name="reg_email" required="required" placeholder="email">
					</div>
					<div class="form-group">
						<label for="reg_fullname" class="sr-only">Full Name</label>
						<input type="text" class="form-control" id="reg_fullname" name="reg_fullname" placeholder="full name" pattern="[a-zA-Z ]{5,}" maxlength="30">
					</div>
				</div>
				<button type="submit" name="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>already have an account? <a href="index.php">login here</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>


</body>
</html>