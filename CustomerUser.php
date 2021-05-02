
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
    $user = $_POST["user"];
    $isError=false;
    $sqlDB = new sqlDB("mysql.eecs.ku.edu","jonellegamble", "Aihoo7fe", "jonellegamble");
    if ($mysqli->connect_errno) {
     printf("Connect failed: %s\n", $mysqli->connect_error);
     exit();
    }

    $doesExist = "SELECT user_id FROM Users WHERE user_id = \"$user\"";
    if($doesExist)
    {
      echo "User already exists";
      $isError=true;
    }
    if ($_POST["user"] == "") {
        echo "Username empty";
        $isError=true;
    }

    if ($isError == false)
    {
        $username = ($_POST["user"]);
        $query = "INSERT INTO Users (user_id) VALUES (\"$username\");";
    }
    $sqlDB->close();
?>
