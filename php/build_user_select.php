<?php

  $mysqli = new mysqli("mysql.eecs.ku.edu", "a682a575", "Xaisifi7", "a682a575");
/* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  $query = "SELECT * FROM Users";
  if ($result = $mysqli->query($query)) {
    // get row
    while ($row = $result->fetch_assoc()) {
      // populate dropdown
      echo '<option>'. $row["user_id"] .'</option>';
    }
/* free result set */
    $result->free();
  }
/* close connection */
  $mysqli->close();
 ?>
