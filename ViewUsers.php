<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
    $sqlDB = new sqlDB("mysql.eecs.ku.edu","jonellegamble", "Aihoo7fe", "jonellegamble");
    if ($mysqli->connect_errno) {
     printf("Connect failed: %s\n", $mysqli->connect_error);
     exit();
    }

  echo "<table style=width:100%>";
  echo "<tr><td> Users </td></tr>";
  echo "<tr></tr>";
  $query = "SELECT user_id FROM Users;";
  if ($results = $sqlDB->query($query)) {
      while ($result = $results->fetch_assoc()) {
          echo "<tr><td>{$result["user_id"]}</td></tr>";
      }
      $results->free();
  }
  $sqlDB->close();
?>
