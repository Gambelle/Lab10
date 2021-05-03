
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
  $sqlDB = new mysqli("mysql.eecs.ku.edu","jonellegamble", "Aihoo7fe", "jonellegamble");
  if ($mysqli->connect_errno) {
   printf("Connect failed: %s\n", $mysqli->connect_error);
   exit();
  }
  echo "<table style=width:100%>";
  echo "<tr><td> Deleted Posts </td></tr>";
  echo "<tr></tr>";

  foreach($_POST["post"] as $post) {
      $postId = $post;
      echo "<td>" .  $postId . "</td>""
      $query = "DELETE FROM Posts WHERE post_id=\"{$postId}\";";
      if(!$mysqli->query($query)){
        echo "Error: Query not sent";
        $isError=true;
      }
      else{
        echo "<td>Deleted</td>";
        echo "<tr></tr>";
      }
    }

  $sqlDB->close();
?>
