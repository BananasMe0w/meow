<?php
  include "connect.php";
  $id = $_GET['cart_id'];
  $cart_id = $_GET['cart_id'];
  $user_id = $_SESSION['sess_id'];
  $sql = "SELECT * FROM tbl_cart WHERE cart_id='$cart_id'";
  $result = $con->query($sql);

  $row = $result->fetch_assoc();

  $newqty = $row['qty']-1;

  $sql = "UPDATE tbl_cart SET qty='$newqty' WHERE cart_id='$cart_id'";
  $result = $con->query($sql);

  if ($newqty<= 0) {
    echo "Hello";
    $sql = "DELETE FROM tbl_cart WHERE cart_id='$id'";
    $result = $con->query($sql);
  }

  if ($result) {
    echo "
    <script type='text/javascript'>
      location = 'cart.php?user_id=".$user_id."';
    </script>
    ";
  }
?>
