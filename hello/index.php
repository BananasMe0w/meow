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
    <div class="container mt-3">
      <div class="row">
        <div class="col-2">

        </div>
        <div class="col-8">
          <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/rongtawblue.jpg" class="d-block w-100 mx-auto">
          </div>
          <div class="carousel-item">
            <img src="images/rongtawdum.jpg" class="d-block w-50 mx-auto">
          </div>
          <div class="carousel-item">
            <img src="images/rongtawred.jpg" class="d-block w-100 mx-auto">
          </div>
        </div>
       <button class="carousel-control-prev" type="button" data-target="#carousel" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carousel" data-slide="next">
          <span class="carousel-control-next-icon"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
        </div>
      </div>
    </div>
    <?php
      include "container.php";
    ?>

    <?php
    include "footer.php";
    ?>
  </body>
</html>
