<?php

  $mysqli = new mysqli("mysql.eecs.ku.edu", "a682a575", "Xaisifi7", "a682a575");
/* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  $query = "SELECT * FROM Users";
  if ($result = $mysqli->query($query)) {
    /*page header*/
    echo "<html>";
    echo "<head>";
    echo '<link rel="stylesheet" href="../css/master.css">';
    echo "</head>";
    echo '<body id="multi_body">';
    /* make table */
    echo '<table class="times_table">';
    echo "<tr><th>USER ID</th></tr>";
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
      printf ("%s (%s)\n", $row["user_id"]);
      echo '<tr><td>'. $row["user_id"] .'</td></tr>';
    }
/* free result set */
    $result->free();
  }
/* close connection */
  $mysqli->close();

  /* page footer */
  echo "</table>";
  echo "</body>";
  echo "</html>";
 ?>
