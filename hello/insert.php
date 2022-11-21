<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <?php
    include "head.php";
     ?>
  </head>
  <body>
    <?php
      include "chk.php";
     ?>

     <div class="container">
       <div class="row">
         <div class="col-2"></div>
         <div class="col-8">
           <div class="card mt-4">
             <div class="card-header bg-info">
               <h4 class="text-white text-center">Insert by admin</h4>
             </div>
             <div class="card-body">
               <form action="insert_script.php" method="post">
                 <div class="container">
                   <div class="row">
                     <div class="col-6">
                       <label>Name :</label>
                       <input class="form-control" type="text" placeholder="Name" name="name_insert" required>
                     </div>
                     <div class="col-6">
                       <label>Surname :</label>
                       <input class="form-control" type="text" placeholder="Surname" name="surname_insert" required>
                     </div>
                     <div class="col-12 mt-3">
                       <label>Phone Number :</label>
                       <input class="form-control" type="text" placeholder="Tel" name="tel_insert" required>
                     </div>
                     <div class="col-12 mt-3">
                       <label>Address :</label>
                       <input class="form-control" type="text" placeholder="Address" name="address_insert" required>
                     </div>
                     <div class="col-12 mt-4">
                       <hr>
                     </div>
                     <div class="col-12 mt-3">
                       <label>Email :</label>
                       <input class="form-control" type="text" placeholder="Email" name="email_insert" required>
                     </div>
                     <div class="col-12 mt-3">
                       <label>Password :</label>
                       <input class="form-control" type="password" placeholder="Password" name="password_insert" required>
                     </div>
                     <div class="col-12 mt-3">
                       <label>Status :</label>
                       <input class="form-control" type="text" placeholder="status 1=user 2=admin" name="status_insert" required>
                     </div>
                     <div class="col-4 mt-4">
                       <button class="btn btn-success" type="submit">Insert</button>
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
