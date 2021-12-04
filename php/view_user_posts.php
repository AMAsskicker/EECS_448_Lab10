<?php
  //vars
  $user_name = $_POST["user_select"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "a682a575", "Xaisifi7", "a682a575");
/* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  $query = "SELECT * FROM Posts WHERE author_id='$user_name'";
  if ($result = $mysqli->query($query)) {
    /*page header*/
    echo "<html>";
    echo "<head>";
    echo '<link rel="stylesheet" href="../css/master.css">';
    echo "</head>";
    echo '<body id="multi_body">';
    /* make table */
    echo '<table class="times_table">';
    echo '<tr><th class="post_auth">User ID</th>';
    echo '<th class="post_message">Post</th>';
    echo '</tr>';
    echo '<tr>';
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
      echo '<td>'. $row["author_id"] .'</td>';
      echo '<td>'. $row["post_body"] .'</td>';
    }
/* free result set */
    $result->free();
  }
/* close connection */
  $mysqli->close();

  // close table
  echo '</tr>';
  echo "</table>";
  //link to admin home,
  echo '<div class="retun_home text_center">';
  echo '<a href="https://people.eecs.ku.edu/~a682a575/html/admin_home.html" class="link">RETURN TO ADMIN HOMEPAGE</a>';
  echo '</div>';
  // html foot
  echo "</body>";
  echo "</html>";
 ?>
