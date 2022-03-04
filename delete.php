<?php
  include_once 'conn.php';

  $user_id = $_GET['del'];

  $sql = "DELETE FROM customer WHERE id = '$user_id'";

  if($conn->query($sql)){
    header("Location: index.php");
  }

?>