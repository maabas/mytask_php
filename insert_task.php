<?php
   include_once 'config.php';
   include_once 'requiredfiles.php';

   ob_start();
   session_start();

     //sebelum insert into, kena masukkan sekali panggilan connection ke db... dalam kes ni nama dia adalah $db (boleh rujuk config.php)
	if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
	   //$Tarikh = $_POST['Tarikh'];
	   $Tarikh = explode('/',$_POST['Tarikh']);
	   $Tarikh = $Tarikh[2].'-'.$Tarikh[0].'-'.$Tarikh[1];
	   $Tugas = $_POST['Tugas'];
       //$reg_email    = $_POST['reg_email'];
       //$reg_fullname = $_POST['reg_fullname'];

       //sebelum insert into, kena masukkan sekali panggilan connection ke db... dalam kes ni nama dia adalah $db (boleh rujuk config.php)
   	   $query = mysqli_query($db,"INSERT INTO tasklist(Tarikh,Tugas) VALUES('$Tarikh','$Tugas')");

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
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MyTasks</title>
</head>

<body>

<!-- Main Form -->

<form id="insert_task" class="text-left" method="post" action="insert_task.php">
			<p>Tarikh: <input type="text" id="datepicker" name="Tarikh"></p>
			<p>Tugas: <textarea rows="4" cols="50" id="tugas" name="Tugas">Sila masukkan senarai kerja anda dan tekan butang hantar.</textarea></p>
		 	<button type="submit" name="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
</form>

</div>
</body>

</html>