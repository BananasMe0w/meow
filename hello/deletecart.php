<?php
  include "connect.php";

  $id = $_GET['cart_id'];
  $user_id = $_SESSION['sess_id'];
  $sql = "DELETE FROM tbl_cart WHERE cart_id='$id'";
  $result = $con->query($sql);

  if ($result) {
    echo "
    <script type='text/javascript'>
      alert('delete success');
      location = 'cart.php?user_id=".$user_id."';
    </script>
    ";
  }
?>
