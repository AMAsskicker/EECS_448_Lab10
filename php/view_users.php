<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "a682a575", "Xaisifi7", "a682a575");
/* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  $query = "SELECT user_id FROM Users";
  if ($result = $mysqli->query($query)) {
/* fetch associative array */
    while ($row = $result->fetch_assoc()) {
      printf ("%s (%s)\n", $row["User ID"]);
      echo '<span id="user_print">'. $row .'</span>';
    }
/* free result set */
    $result->free();
  }
/* close connection */
  $mysqli->close();
 ?>
