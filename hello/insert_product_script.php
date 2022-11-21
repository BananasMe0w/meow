<?php
  include "connect.php";

  $name = $_POST['name_insert'];
  $info = $_POST['info_insert'];
  $image = $_POST['img_insert'];
  $qty = $_POST['qty_insert'];
  $price = $_POST['price_insert'];

  if($name=='' or $info=='' or $image=='' or $qty=='' or $price==''){
    echo "cannot invalid";
  }
    else{
        $sql = "INSERT INTO `tbl_product`(`name`, `info`, `img`, `qty`, `price`) VALUES ('$name','$info','$image','$qty','$price')";
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
