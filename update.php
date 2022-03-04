<?php
  include_once 'conn.php';

  $user_id = $_GET['update'];

  $sql = "SELECT * FROM customer WHERE id = '$user_id'";
  $result = $conn->query($sql);

  $value = $result->fetch_assoc();

?>

<form action="confirm-update.php?id=<?php echo $value['id'] ?>" method="post">
    <table>
      <tr>
        <th>NAME</th>
        <td><input type="text" name="name" value="<?php echo $value['name'] ?>"></td>
      </tr>
      <tr>
        <th>ADDRESS</th>
        <td><input type="text" name="address" value="<?php echo $value['address'] ?>"></td>
      </tr>
      <tr>
        <td colspan="2"><center><button type="submit">UPDATE</button></center></td>
      </tr>
    </table>
  </form>