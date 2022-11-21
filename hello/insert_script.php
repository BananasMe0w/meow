<?php
  include "connect.php";

  $name = $_POST['name_insert'];
  $surname = $_POST['surname_insert'];
  $tel = $_POST['tel_insert'];
  $address = $_POST['address_insert'];
  $email = $_POST['email_insert'];
  $password = $_POST['password_insert'];
  $status = $_POST['status_insert'];

  if($name=='' or $surname=='' or $tel=='' or $address=='' or $email=='' or $password=='' or $status==''){
    echo "cannot invalid";
  }
    else{
        $sql = "INSERT INTO `tbl_user`(`name`, `surname`, `address`, `tel`, `email`, `pw`, `status`) VALUES ('$name','$surname','$address','$tel','$email','$password','$status')";
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
