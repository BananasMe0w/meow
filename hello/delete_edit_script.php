<?php
  include "connect.php";

  $id = $_POST['id_edit_delete'];

  if($id==''){
    echo "cannot invalid";
  }
    else{
        $sql = "DELETE FROM `tbl_user` WHERE `tbl_user`.`id` = '$id'";
        $result = $con->query($sql);

        if ($result) {
          echo "
          <script type='text/javascript'>
            alert('Success');
            location = 'list_user.php';
          </script>
          ";
        }else{
          echo "
          <script type='text/javascript'>
            alert('Error');
            location = 'list_user.php';
          </script>
          ";
        }
      }
 ?>
