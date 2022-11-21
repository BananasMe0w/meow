<?php
  include "connect.php";

  $id = $_POST['id_product'];
  $name = $_POST['name_product'];
  $info = $_POST['info_product'];
  $image = $_POST['img_product'];
  $qty = $_POST['qty_product'];
  $price = $_POST['price_product'];

  if($id=='' or $name=='' or $info=='' or $image=='' or $qty=='' or $price==''){
    echo "cannot invalid";
  }
    else{
        $sql = "UPDATE `tbl_product` SET `name`='$name',`info`='$info',`img`='$image',`qty`='$qty',`price`='$price' WHERE `tbl_product`.`pro_id` = '$id'";
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
