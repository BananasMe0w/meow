<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <?php
    include "head.php";
     ?>
  </head>
  <body>
    <?php include "chk.php";?>
    <div class="container">
      <table class="table table-resposive-lg">
        <thead>
          <th>Name</th>
          <th>image</th>
          <th>amount</th>
          <th>price</th>
          <th>total</th>
          <th>
            ACTION:
            <button class="btn btn-info" type="button" name="button"><a class="text-white" href="print_cart.php" target='_blank'>print</a></button>
          </th>
        </thead>
        <tbody>
          <?php
            $user_id = $_GET['user_id'];
            $sql = "SELECT * FROM tbl_cart WHERE user_id='$user_id'";
            $result = $con->query($sql);
            $total = 0;

            while ($row = $result->fetch_assoc()) {

              $sql2 = "SELECT * FROM tbl_product WHERE pro_id='$row[product_id]'";
              $result2 = $con->query($sql2);
              $row2 = $result2->fetch_assoc();

              $total = $total + $row['qty']*$row2['price'];
          ?>
          <tr>
            <td><?php echo $row2['pro_id'] ?></td>
            <td><img class="w-50" src="<?php echo $row2['img']; ?>"></td>
            <td>
              <a href="sub_qty.php?cart_id=<?php echo $row['cart_id']; ?>"><button class="btn btn-default" type="button" name="button"><</button></a>
              <?php echo number_format($row['qty']); ?>
              <a href="add_qty.php?cart_id=<?php echo $row['cart_id']; ?>"><button class="btn btn-default" type="button" name="button">></button></a>
            </td>
            <td><?php echo $row2['price']; ?></td>
            <td><?php echo number_format($row['qty']*$row2['price']); ?></td>
            <td><a href="deletecart.php?cart_id=<?php echo $row['cart_id']; ?>"><button class="btn btn-danger" type="button">Delete</button></a> </td>
          </tr>
          <?php } ?>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><p>price: </p></td>
            <td><?php echo number_format($total); ?></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><p>vat 7%: </p></td>
            <td><?php echo number_format($total*0.07); ?></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><p>total (price + vat 7%): </p></td>
            <td><?php echo number_format($total*1.07); ?></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <?php include "footer.php";?>
  </body>
</html>
