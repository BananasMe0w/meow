<?php
  include "connect.php";
  if($_SESSION['sess_status']==1){
    include "usernavbar.php";
  }else if ($_SESSION['sess_status']==2) {
    include "adminnavbar.php";
  }else{
    include "navbar.php";
  }
 ?>
