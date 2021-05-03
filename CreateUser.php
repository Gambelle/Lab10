
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
    $user = $_POST["user"];
    $isError=false;
    $mysqli = new mysqli("mysql.eecs.ku.edu","jonellegamble", "Aihoo7fe", "jonellegamble");
    if ($mysqli->connect_errno) {
     printf("Connect failed: %s\n", $mysqli->connect_error);
     exit();
    }

    $doesExist ="SELECT user_id FROM Users WHERE EXISTS user_id=\"" . $user . "\"";
    if ($result = $mysqli ->query($doesExist)) {
  }
    if($result)
    {
      echo $user . " Error: User already exists";
      echo $result;
      $isError=true;
    }
    else if ($_POST["user"] == "") {
        echo " Error: Username empty";
        $isError=true;
    }

    if ($isError == false)
    {

        $username = $mysqli->escape_string($_POST["user"]);
        $query = "INSERT INTO Users (user_id) VALUES (\"$username\");";

        if(!$mysqli->query($query)){
          echo "Error: Query not sent";
          $isError=true;
        }
        else{
          echo "User Saved: " . $username;

        }
    }
    $mysqli->close();
?>
