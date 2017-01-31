<?php
   include_once 'config.php';
   include_once 'requiredfiles.php';

   ob_start();
   session_start();

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*$sql = "SELECT id, Tarikh, Tugas FROM tasklist";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Tarikh: " . $row["Tarikh"]. " Tugas " . $row["Tugas"]. "<br>";
    }
} else {
    echo "0 results";
}
$db->close(); */
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" class="init">

$(document).ready(function() {
$('#example').dataTable( {
 "aProcessing": true,
 "aServerSide": true,
"ajax": "server-response.php",
} );
} );

</script>
</head>

<body class="dt-example">
<table id="tasklist" class="display" cellspacing="0" width="100%" border="1">
  <thead>
    <tr>
      <th>ID</th>
      <th>Tarikh</th>
      <th>Tugasan</th>
    </tr>
  </thead>

    <tr>
      <?php 
      $sql = "SELECT id, Tarikh, Tugas FROM tasklist";
      $result = $db->query($sql);
      if ($result->num_rows > 0) { 
      while($row = $result->fetch_assoc()) {
      ?>
        <td>
          <?php 
                  echo $row["id"];
          ?>
        </td>
        <td>
          <?php 
                  echo $row["Tarikh"];
          ?>  
        </td>
        <td>
          <?php 
                  echo $row["Tugas"];
          ?>
        </td>

    </tr>
          <?php
      }
      } else {
          echo "0 results";
      }
      $db->close(); 
      ?>
</table>


</body>
</html>