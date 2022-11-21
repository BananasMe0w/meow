<div class="container">
  <table class="table table-responsive-lg mt-3">
    <thead>
      <th>ID</th>
      <th>Name</th>
      <th>Surname</th>
      <th>adddress</th>
      <th>tel</th>
      <th>email</th>
      <th>status</th>
    </thead>
    <tbody>
      <?php
        $sql = "SELECT * FROM tbl_user";
        $result = $con->query($sql);

        while ($row = $result->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['surname']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['tel']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php
        if ($row['status'] == 2) {
          echo "admin";
        }else {
          echo "user";
        }
        ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <hr>
  <button class="btn btn-success"><a class="text-white" href="insert.php">Insert</a></button>
  <button class="btn btn-primary"><a class="text-white" href="edit.php">Edit</a></button>
  <button class="btn btn-danger"><a class="text-white" href="delete_edit.php">Delete</a></button>

</div>
