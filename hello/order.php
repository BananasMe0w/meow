<?php
  include "connect.php";

  $id = $_GET['id'];
  $user_id = $_SESSION['sess_id'];

  $sql = "SELECT* FROM tbl_cart WHERE user_id='$user_id' AND product_id='$id'";
  $result = $con->query($sql);
  if ($result->num_rows>0) {
    $row = $result->fetch_assoc();
    $qty = $row['qty']+1;

    $sql = "UPDATE `tbl_cart` SET `qty`='$qty' WHERE user_id='$user_id' AND product_id='$id'";
    $result= $con->query($sql);

    if ($result) {
      echo "
      <script type='text/javascript'>
        alert('order success');
        location = 'index.php';
      </script>
      ";
    }
  }else {
    $sql = "INSERT INTO `tbl_cart`(`user_id`, `product_id`, `qty`) VALUES ('$user_id','$id','1')";
    $result = $con->query($sql);

    if ($result) {
      echo "
      <script type='text/javascript'>
        alert('order success');
        location = 'index.php';
      </script>
      ";
    }
  }
?>
