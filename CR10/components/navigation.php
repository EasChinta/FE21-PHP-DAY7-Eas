
<nav class="navbar navbar-expand-lg navbar-light bg-transparent d-flex justify-content-between">
  <div class="container-fluid">
    <div><a class="navbar-brand" href="index.php">Big Library</a></div>
    <?php
    if(isset($_SESSION["adm"])) {
      echo '<div><a class="nav-link active" aria-current="page" href="users.php"><button class="btn btn-outline-dark loginBtn">Manage Users</button></a></div>';
    }elseif(!isset($_SESSION["adm"]) && !isset($_SESSION["user"])){
      echo '<div><a class="nav-link active" aria-current="page" href="login.php"><button class="btn btn-outline-dark loginBtn">Login</button></a></div>';
    }
    
    ?>
    <div><a class="btn btn-outline-dark" href="logout.php?logout">Sign Out</a></div>

  </div>
</nav>