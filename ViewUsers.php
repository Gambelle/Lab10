<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
    $mysqli = new mysqli("mysql.eecs.ku.edu","jonellegamble", "Aihoo7fe", "jonellegamble");
    if ($mysqli->connect_errno) {
     printf("Connect failed: %s\n", $mysqli ->connect_error);
     exit();
    }

  echo "<table style=width:100%>";
  echo "<tr><td> Users </td></tr>";
  echo "<tr></tr>";
  $query = "SELECT user_id FROM Users";
  if ($result = $mysqli ->query($query)) {
      while ($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["user_id"] . "</td></tr>";
      }
      $result->free();
  }
  $mysqli ->close();
?>
