
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
      echo "Error: User doesn't exists";
      $isError=true;
    }
    if ($_POST["post"] == "") {
        echo "Error: Post is empty";
        $isError=true;
    }

    if ($isError == false)
    {
        $username = ($_POST["user"]);
        $post = ($_POST["post"]);
        $query = "INSERT INTO Posts (content, author_id) VALUES (\"$post\", \"$username\");";
        if(!$mysqli->query($query)){
          echo "Error: Query not sent";
          $isError=true;
        }
        else{
          echo "Post Saved by: " . $username;
        }
    }
    $mysqli->close();
?>
