<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <?php
    include "head.php";
    include "connect.php";
    ?>
  </head>
  <body onload="window.print()">
    <div class="container">
      <table class="table table-resposive-lg">
        <thead>
          <th>Name</th>
          <th>amount</th>
          <th>price</th>
          <th>total</th>
          <th></th>
        </thead>
        <tbody>
          <?php
            $sql = "SELECT * FROM tbl_cart";
            $result = $con->query($sql);
            $total = 0;

            while ($row = $result->fetch_assoc()) {

              $sql2 = "SELECT * FROM tbl_product WHERE pro_id='$row[product_id]'";
              $result2 = $con->query($sql2);
              $row2 = $result2->fetch_assoc();

              $total = $total + $row['qty']*$row2['price'];
          ?>
          <tr>
            <td><?php echo $row2['name'] ?></td>
            <td>
              <?php echo number_format($row['qty']); ?>
            </td>
            <td><?php echo number_format($row2['price']); ?></td>
            <td><?php echo number_format($row['qty']*$row2['price']); ?></td>
            <td></td>
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
