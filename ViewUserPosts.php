<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
    $username = $_POST["users"]
    $mysqli = new mysqli("mysql.eecs.ku.edu","jonellegamble", "Aihoo7fe", "jonellegamble");
    if ($mysqli->connect_errno) {
     printf("Connect failed: %s\n", $mysqli->connect_error);
     exit();
    }

  echo "<table style=width:100%>";
  echo "<tr><td> Posts by . $username . </td></tr>";
  echo "<tr></tr>";
  $query = "SELECT content FROM Posts WHERE author_id=\"" . $username . "\"";
  if ($results = $mysqli->query($query)) {
      while ($result = $results->fetch_assoc()) {
          echo "<tr><td>" . $result["content"] . "</td></tr>";
      }
      $results->free();
  }
  $mysqli->close();
?>
