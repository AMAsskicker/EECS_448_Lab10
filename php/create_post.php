<?php
  // error reporting
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  //vars
  $post_message = $_POST["post_message"];
  $post_author = $_POST["userName"];
  $post_id = rand(); //CREATE RANDOM NUMBER
  $can_post = false;
  $post_id_valid = false;
  //get db
  $mysqli = new mysqli("mysql.eecs.ku.edu", "a682a575", "Xaisifi7", "a682a575");
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  //get current users
  $user_query = "SELECT * FROM Users";
  // get query
  if ($user_result = $mysqli->query($user_query)) {
    //check for existing name in db
    while ($user_row = $user_result->fetch_assoc()) {
      if ($user_row["user_id"] == $post_author) {
        $can_post = true;
      }
    }
  }
  //GET CURRENT POST NUMBERS
  $post_query = "SELECT post_id FROM Posts";
  if ($id_result = $mysqli->query($post_query)) {
    while (!$post_id_valid) {
      RESTART:
      //check for existing id in db
      while ($id_row = $id_result->fetch_assoc()) {
        if ($id_row["post_id"] == $post_id) {
          //REPEAT IF NEEDED
          $post_id = rand();
          goto RESTART;
        }
      }
      $post_id_valid = true;
    }
  }
//append to table
  if ($can_post) {
    $add_post = mysqli_query($mysqli, "INSERT INTO POSTS(post_id, post_body, author_id) VALUES ('$post_id', '$post_message', '$post_author')");
    if ($add_post) {
      echo "POST MADE";
    } else {
      echo "POST FAILED";
    }
  } else {
    echo "NOT A REGISTERED USER";
  }

  //CLEANUP
  $user_result->free();
  $id_result->free();
  $mysqli->close();

 ?>
