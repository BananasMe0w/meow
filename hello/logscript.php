<?php
  include "connect.php";

  $email = $_POST['email_log'];
  $password = $_POST['password_log'];

  echo $email.$password;
  if($email=='' || $password==''){
    echo $email.$password;
  }else{
    $sql ="SELECT * FROM tbl_user WHERE email='$email'";
    $result = $con->query($sql);

    if($result->num_rows<1){
      echo "
      <script type='text/javascript'>
        alert('Not found email');
        location = 'login.php';
      </script>
      ";
    }
    else {
      $sql ="SELECT * FROM tbl_user WHERE email='$email' AND pw='$password'";
      $result = $con->query($sql);
      if($result->num_rows<1){
        echo "
        <script type='text/javascript'>
          alert('password wrong');
          location = 'login.php';
        </script>
        ";
      }
      else {
        $row = $result->fetch_assoc();
        $_SESSION['sess_id']= $row['id'];
        $_SESSION['sess_name']= $row['name'];
        $_SESSION['sess_status']= $row['status'];
        echo "
        <script type='text/javascript'>
          alert('Login Success');
          location = 'index.php';
        </script>
        ";
      }
    }
  }
?>
