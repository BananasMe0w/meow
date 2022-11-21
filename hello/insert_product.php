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
               <form action="insert_product_script.php" method="post">
                 <div class="container">
                   <div class="row">
                     <div class="col-12">
                       <label>Name :</label>
                       <input class="form-control" type="text" placeholder="Name" name="name_insert" required>
                     </div>
                     <div class="col-12 mt-3">
                       <label>info :</label>
                       <input class="form-control" type="text" placeholder="info" name="info_insert" required>
                     </div>
                     <div class="col-12 mt-3">
                       <label>image :</label>
                       <input class="form-control" type="text" placeholder="image ex. image/example.jpg" name="img_insert" required>
                     </div>
                     <div class="col-12 mt-4">
                       <hr>
                     </div>
                     <div class="col-12 mt-3">
                       <label>quantity :</label>
                       <input class="form-control" type="text" placeholder="quantity" name="qty_insert" required>
                     </div>
                     <div class="col-12 mt-3">
                       <label>price :</label>
                       <input class="form-control" type="text" placeholder="price" name="price_insert" required>
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
