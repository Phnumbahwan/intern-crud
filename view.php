<?php 
  include_once 'conn.php';

  $sql = "SELECT * FROM customer";
  $result = $conn->query($sql);

?>