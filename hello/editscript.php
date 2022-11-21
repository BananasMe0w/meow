<?php
  include "connect.php";

  $id = $_POST['id_edit'];
  $name = $_POST['name_edit'];
  $surname = $_POST['surname_edit'];
  $address = $_POST['address_edit'];
  $tel = $_POST['tel_edit'];
  $email = $_POST['email_edit'];
  $status = $_POST['status_edit'];

  if($id=='' or $name=='' or $surname=='' or $address=='' or $tel=='' or $email=='' or $status==''){
    echo "cannot invalid";
  }
    else{
        $sql = "UPDATE `tbl_user` SET `name`='$name',`surname`='$surname',`address`='$address',`tel`='$tel',`email`='$email',`status`='$status' WHERE `tbl_user`.`id` = '$id'";
        $result = $con->query($sql);

        if ($result) {
          echo "
          <script type='text/javascript'>
            alert('Success');
            location = 'List_user.php';
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
