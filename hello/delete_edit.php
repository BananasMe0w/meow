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
               <h4 class="text-white text-center">Delete by admin</h4>
             </div>
             <div class="card-body">
               <form action="delete_edit_script.php" method="post">
                 <div class="container">
                   <div class="row">
                     <div class="col-12">
                       <label>ID :</label>
                       <input class="form-control" type="text" placeholder="id" name="id_edit_delete" required>
                     </div>
                     <div class="col-4 mt-4">
                       <button class="btn btn-danger" type="submit">Delete</button>
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
