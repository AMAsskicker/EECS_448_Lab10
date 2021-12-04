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
// html head
  echo '<html lang="en" dir="ltr">';
  echo '<head>';
  echo '<meta charset="utf-8">';
  echo '<link rel="stylesheet" href="../css/master.css">';
  echo '<title>New Posts Result</title>';
  echo '</head>';
  echo '<body class="text_center" id="black_body">';
  if ($can_create) {
    //not in use, create new row
    $add_result = mysqli_query($mysqli, "INSERT INTO Users(user_id) VALUES ('$new_user_name')");
    if ($add_result) {
      echo '<span class="white_20_mono">New record created successfully</span>';
    } else {
      echo '<span class="white_20_mono">ERROR: NEW USER NOT CREATED</span>';
    }
  } else {
    echo '<span class="white_20_mono">USER NAME ALREADY EXISTS</span>';
  }
  //free results, close connection
  $result->free();
  $mysqli->close();
// return home link
  echo '<div class="retun_home text_center">';
  echo '<a href="https://people.eecs.ku.edu/~a682a575/" class="link">RETURN TO HOMEPAGE</a>';
  echo '</div>';
  // html foot
  echo '</body>';
  echo '</html>';
 ?>
