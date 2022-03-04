<?php
  include_once 'conn.php';

  $id = $_GET['id'];
  $name = $_POST['name'];
  $address = $_POST['address'];

  $sql = "UPDATE customer SET name = '$name', address = '$address' WHERE id = '$id'";

  if($conn->query($sql)){
    header("Location: index.php");
  }else {
    echo 'ERROR : '. $conn->error;
  }

?>