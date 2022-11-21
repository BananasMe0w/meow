<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <!-- left -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
    </ul>

    <!-- right -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown">Welcome <?php echo $_SESSION['sess_name']; ?></a>
        <div class="dropdown-menu" aria-labelledby="dropdown">
          <a class="dropdown-item" href="list_product.php">All product</a>
          <a class="dropdown-item" href="list_user.php">All user</a>
          <hr>
          <a class="dropdown-item" href="logout.php">Log out</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
