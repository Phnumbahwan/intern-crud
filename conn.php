<?php
  $servername = 'localhost';
  $username = 'root';
  $pass = '';
  $mydb = 'myCrud';

  $conn = new mysqli($servername, $username, $pass, $mydb);

  if($conn->error){
    die();
  }

?>