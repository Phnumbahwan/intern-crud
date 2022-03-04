<?php
  include_once 'conn.php';

  $name = $_POST['name'];
  $address = $_POST['address'];

  $sql = "INSERT INTO customer(name,address) VALUES('$name','$address')";

  if($conn->query($sql)){
    header("Location: index.php");
  }else{
    echo "Error : ". $conn->error;
  }

?>