<?php
  include "connect.php";

  $name = $_POST['name_reg'];
  $surname = $_POST['surname_reg'];
  $tel = $_POST['tel_reg'];
  $address = $_POST['address_reg'];
  $email = $_POST['email_reg'];
  $password = $_POST['password_reg'];
  $repassword = $_POST['repassword_reg'];

  if($name=='' or $surname=='' or $tel=='' or $address=='' or $email=='' or $password=='' or $repassword==''){
    echo "Hello";
  }
  else if($password <> $repassword){
    echo "
    <script type='text/javascript'>
      alert('Wrong Password');
      location = 'register.php';
    </script>
    ";
  }
  else{
    $sql = "SELECT * FROM tbl_user WHERE email='$email'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
      echo "
      <script type='text/javascript'>
        alert('Email had used');
        location = 'register.php';
      </script>
      ";
    }
    else{
        $sql = "INSERT INTO `tbl_user`(`name`, `surname`, `address`, `tel`, `email`, `pw`, `status`) VALUES ('$name','$surname','$tel','$address','$email','$password','1')";
        $result = $con->query($sql);

        if ($result) {
          echo "
          <script type='text/javascript'>
            alert('Success');
            location = 'login.php';
          </script>
          ";
        }else{
          echo "
          <script type='text/javascript'>
            alert('Error');
            location = 'register.php';
          </script>
          ";
        }
    }
  }
 ?>
