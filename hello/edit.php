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
               <h4 class="text-white text-center">Edit by admin</h4>
             </div>
             <div class="card-body">
               <form action="editscript.php" method="post">
                 <div class="container">
                   <div class="row">
                     <div class="col-12">
                       <label>ID :</label>
                       <input class="form-control" type="text" placeholder="id" name="id_edit" required>
                     </div>
                     <div class="col-6 mt-3">
                       <label>Name :</label>
                       <input class="form-control" type="text" placeholder="Name" name="name_edit" required>
                     </div>
                     <div class="col-6 mt-3">
                       <label>Surname :</label>
                       <input class="form-control" type="text" placeholder="Surname" name="surname_edit" required>
                     </div>
                     <div class="col-12 mt-3">
                       <label>Address :</label>
                       <input class="form-control" type="text" placeholder="Address" name="address_edit" required>
                     </div>
                     <div class="col-12 mt-3">
                       <label>Phone Number :</label>
                       <input class="form-control" type="text" placeholder="Tel" name="tel_edit" required>
                     </div>
                     <div class="col-12 mt-4">
                       <hr>
                     </div>
                     <div class="col-12 mt-3">
                       <label>Email :</label>
                       <input class="form-control" type="text" placeholder="Email" name="email_edit" required>
                     </div>
                     <div class="col-12 mt-3">
                       <label>Status :</label>
                       <input class="form-control" type="text" placeholder="status" name="status_edit" required>
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
