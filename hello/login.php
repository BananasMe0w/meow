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
               <h4 class="text-white text-center">Login</h4>
             </div>
             <div class="card-body">
               <form action="logscript.php" method="post">
                 <div class="container">
                   <div class="row">
                     <div class="col-12 mt-3">
                       <label>Email :</label>
                       <input class="form-control" type="text" placeholder="Email" name="email_log" required>
                     </div>
                     <div class="col-12 mt-3">
                       <label>Password :</label>
                       <input class="form-control" type="password" placeholder="password" name="password_log" required>
                     </div>
                     <div class="col-4 mt-4">
                       <button class="btn btn-success" type="submit">Submit</button>
                     </div>
                     <div class="col-12 mt-4">
                       <a href="register.php">Not have an account right?</a>
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
