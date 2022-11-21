<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <?php
    include "head.php";
     ?>
  </head>
  <body>
    <?php
      include "navbar.php";
     ?>

     <div class="container">
       <div class="row">
         <div class="col-2"></div>
         <div class="col-8">
           <div class="card mt-4">
             <div class="card-header bg-info">
               <h4 class="text-white text-center">Register</h4>
             </div>
             <div class="card-body">
               <form action="regscript.php" method="post">
                 <div class="container">
                   <div class="row">
                     <div class="col-6">
                       <label>Name :</label>
                       <input class="form-control" type="text" placeholder="Name" name="name_reg" required>
                     </div>
                     <div class="col-6">
                       <label>Surname :</label>
                       <input class="form-control" type="text" placeholder="Surname" name="surname_reg" required>
                     </div>
                     <div class="col-12 mt-3">
                       <label>Phone Number :</label>
                       <input class="form-control" type="text" placeholder="Tel" name="tel_reg" required>
                     </div>
                     <div class="col-12 mt-3">
                       <label>Address :</label>
                       <input class="form-control" type="text" placeholder="Address" name="address_reg" required>
                     </div>
                     <div class="col-12 mt-4">
                       <hr>
                     </div>
                     <div class="col-12 mt-3">
                       <label>Email :</label>
                       <input class="form-control" type="text" placeholder="Email" name="email_reg" required>
                     </div>
                     <div class="col-6 mt-3">
                       <label>Password :</label>
                       <input class="form-control" type="password" placeholder="password" name="password_reg" required>
                     </div>
                     <div class="col-6 mt-3">
                       <label>Re Password :</label>
                       <input class="form-control" type="password" placeholder="re password" name="repassword_reg" required>
                     </div>
                     <div class="col-4 mt-4">
                       <button class="btn btn-success" type="submit">Submit</button>
                     </div>
                   </div>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>

     <?php
     include "footer.php";
    ?>
  </body>
</html>
