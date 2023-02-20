<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Document</title>
  <script src="script.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="./index.php">
      <img
        src="images/Logo.png"
        height="100"
        alt="MDB Logo"
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse navbar-right" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item h5">
          <a class="nav-link" href="../About/index.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link h5" href="https://letusdream.org/">Dreams</a>
        </li>
      </ul>
      <!-- Left links -->

      
        
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
      <img src="images/IMG_20190425_103916.jpg" class="img-fluid pt-5 px-0 mx-0" style="max-width: 100%; height: auto;">

      </div>
      <div class="col-lg-6">
        <div class="form-wrapper px-0 mx-0">
          <h1>Sign In</h1>
          <form action="login.php" method="post">
            <div class="form-item">
              <label for="email"></label>
              <input type="email" name="email" required="required" placeholder="Email Address"></input>
            </div>
            <div class="form-item">
              <label for="password"></label>
              <input type="password" name="password" required="required" placeholder="Password"></input>
            </div>
            <div class="button-panel">
              <input type="submit" class="button" title="Sign In" value="Sign In"></input>
              <input class="button my-3" title="forget" value="Forget Passoword"></input>
            </div>
          </form>
          <div class="form-footer">

          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include '../LOGIN_PAGE/login.php' ?>
</body>

</html>