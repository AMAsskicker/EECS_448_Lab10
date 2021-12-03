<?php
  // error reporting
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  //vars
  $can_create = true;
  $mysqli = new mysqli("mysql.eecs.ku.edu", "a682a575", "Xaisifi7", "a682a575");
  $get_query = "SELECT * FROM Users";
  //get user field
  $new_user_name = $_POST["userName"];
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  // get query
  if ($result = $mysqli->query($get_query)) {
    //check for existing name in db
    while ($row = $result->fetch_assoc()) {
      if ($row["user_id"] == $new_user_name) {
        $can_create = false;
      }
    }
  }
  if ($can_create) {
    //not in use, create new row
    $add_result = mysqli_query($mysqli, "INSERT INTO Users(user_id) VALUES ('$new_user_name')");
    if ($add_result) {
      echo "New record created successfully";
    } else {
      echo "Error: NEW USER NOT CREATED";
    }
  } else {
    echo "USER NAME ALREADY EXISTS";
  }
  //free results, close connection
  $result->free();
  $mysqli->close();
 ?>
