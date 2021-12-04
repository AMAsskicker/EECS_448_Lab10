<?php
  // error reporting
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  //vars
  $del_url = "https://people.eecs.ku.edu/~a682a575/delete_post.html";

  // DB connection
  $mysqli =  new mysqli("mysql.eecs.ku.edu", "a682a575", "Xaisifi7", "a682a575");
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  //get posts to delete
  $posts_2_delete = $_GET["to_delete"];

  if (!empty($posts_2_delete)) {
    //html head
    echo '<html lang="en" dir="ltr">';
    echo '<head>';
    echo '<meta charset="utf-8">';
    echo '<link rel="stylesheet" href="./css/master.css">';
    echo '<title>View Posts</title>';
    echo '</head>';
    echo '<body class="text_center" id="black_body">';

    //itterate through delete posts
    foreach ($posts_2_delete as $delete_id) {
      //grab post auth
      $auth_query = "SELECT author_id FROM Posts WHERE post_id='$delete_id'";
      $post_auth = mysqli->query($auth_query);
      $auth_row = $post_auth->fetch_assoc();
      $auth_string = $auth_row["author_id"];
      $del_result = mysqli_query($mysqli, "DELETE FROM Posts WHERE post_id='$delete_id'");
      if ($del_result) {
        echo '<span class="white_20_mono">DELETED POST ID: '. $delete_id .' BY: '. $auth_string .'</span><br>';
      } else {
        echo '<span class="white_20_mono">ERROR DELETING POST ID: '. $delete_id .' BY: '. $auth_string .'</span><br>';
      }
      // release
      $post_auth->free();
    }
    // cleanup
    $mysqli->close();
    //html foot
    echo '</body>';
    echo '</html>';
  } else {
    echo '<script> location.href="'. $del_url .'"; </script>';
    exit;
}
 ?>
