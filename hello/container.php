<hr>
<h3 class="text-center">All Product</h3>
<hr>
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
          <img class="d-block w-100" src="<?php echo $row['img']; ?>" alt="">
        </div>
        <div class="card-body">
          <h4 class="text-center"><?php echo $row['name']; ?></h4>
          <hr>
          <p><?php echo $row['info']; ?></p>
          <hr>
          <p>left: <?php echo number_format($row['qty']); ?></p>
          <p>Price: <?php echo number_format($row['price']); ?></p>
          <div class="text-center">
            <a href="order.php?id=<?php echo $row['pro_id']; ?>"><button type="button" class="btn btn-primary">Cart</button></a>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    </div>
  </div>
</div>
