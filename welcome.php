<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; // $login session dipanggil dari session.php ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>