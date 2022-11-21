<div class="container">
  <div class="row">
    <?php
    $sql="SELECT * FROM tbl_product";
    $result = $con-> query($sql);

    while($row = $result->fetch_assoc()){
    ?>
    <div class="col-4">
      <div class="card mb-3 mt-3">
        <div class="card-header">
          <img class="d-block w-100" src="<?php echo $row['img']; ?>">
        </div>
        <div class="card-body">
          <h5 class="text-center text-info">product id : <?php echo $row['pro_id']; ?></h5>
          <h4 class="text-center"><?php echo $row['name']; ?></h4>
          <hr>
          <p><?php echo $row['info']; ?></p>
          <hr>
          <p>left: <?php echo number_format($row['qty']); ?></p>
          <p>Price: <?php echo number_format($row['price']); ?></p>
          <a class="text-white" href="edit_product.php"><button class="btn btn-primary">Edit</button></a>
          <a class="text-white" href="delete_product.php"><button class="btn btn-danger">Delete</button></a>
        </div>
      </div>
    </div>
    <?php } ?>
    </div>
  <hr>
  <a class="text-white" href="insert_product.php"><button class="btn btn-success">Insert</button></a>

</div>
