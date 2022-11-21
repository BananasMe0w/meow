<?php
  include "connect.php";

  $id = $_POST['id_delete_product'];

  if($id==''){
    echo "cannot invalid";
  }
    else{
        $sql = "DELETE FROM `tbl_product` WHERE `tbl_product`.`pro_id` = '$id'";
        $result = $con->query($sql);

        if ($result) {
          echo "
          <script type='text/javascript'>
            alert('Success');
            location = 'list_product.php';
          </script>
          ";
        }else{
          echo "
          <script type='text/javascript'>
            alert('Error');
            location = 'list_product.php';
          </script>
          ";
        }
      }
 ?>
