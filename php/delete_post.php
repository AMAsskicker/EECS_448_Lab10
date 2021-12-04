<?php
  // error reporting
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  //vars
  $posts_deleted = 0;

  // DB connection
  $mysqli =  new mysqli("mysql.eecs.ku.edu", "a682a575", "Xaisifi7", "a682a575");
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  //get posts to delete
  $posts_2_delete = $_POST["to_delete"];
  //itterate through delete posts
  foreach ($posts_2_delete as $delete_id) {
    $del_result = mysqli_query($mysqli, "DELETE FROM Posts WHERE post_id='$delete_id'");
    if ($del_result) {
      echo '<span>DELETED POST ID: '. $delete_id .'</span><br>';
    } else {
      echo '<span>ERROR DELETING POST ID: '. $delete_id .'</span><br>';
    }
  }


  // cleanup
  $mysqli->close();


 ?>
