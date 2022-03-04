<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table>
    <tr>
      <th>NAME</th>
      <th>ADDRESS</th>
      <th></th>
    </tr>
    <?php
      include_once 'view.php';

      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
    ?>
      <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td>
          <button><a href="delete.php?del=<?php echo $row['id'] ?>">DELETE</a></button>
          <button><a href="update.php?update=<?php echo $row['id'] ?>">UPDATE</a></button>
        </td>
      </tr>
    <?php
        }
      }
    ?>
  </table>

  <form style="padding-top: 10px;" action="insert.php" method="post">
    <table>
      <tr>
        <th>NAME</th>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <th>ADDRESS</th>
        <td><input type="text" name="address"></td>
      </tr>
      <tr>
        <td colspan="2"><center><button type="submit">ADD</button></center></td>
      </tr>
    </table>
  </form>

</body>
</html>

<style>
  table, tr,th,td {
    border: 2px solid black;
    padding: 15px;
    border-collapse: collapse;
  }
</style>