<?php

session_start();

require_once("../rprocess.php");

$roll= $_SESSION["roll"];
$dbmain = $connection -> query("SELECT * FROM students WHERE exam_roll = '$roll'");
$db = mysqli_fetch_array($dbmain);

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Student Panel - Electrical and Electronic Engineering</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css" class="css">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <img src="img/logo.png" alt="" class="logo">
        <h1 class="head">Electrical and Electronic Engineering</h1>
      </div>
      <div class="list-group list-group-flush">
        <a href="index.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="profile.php" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="result.php" class="list-group-item list-group-item-action bg-light">Result</a>
        <a href="notices.php" class="list-group-item list-group-item-action bg-light">Notices</a>
        <a href="payments.php" class="list-group-item list-group-item-action bg-light">Payments</a>
        <a href="books.php" class="list-group-item list-group-item-action bg-light">Books</a>
        <a href="teachers.php" class="list-group-item list-group-item-action bg-light">Teachers</a>
        <a href="forum.php" class="list-group-item list-group-item-action bg-light">Forum</a>
        <a href="journal.php" class="list-group-item list-group-item-action bg-light">Journals</a>
        <a href="jobs.php" class="list-group-item list-group-item-action bg-light">Jobs</a>
        <a href="blood.php" class="list-group-item list-group-item-action bg-light">Blood Bank</a>
        <a href="message.php" class="list-group-item list-group-item-action bg-light">Messages</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION["full_name"];?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profile</a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../logout.php">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >Dashboard</h2>
      </div>
      
      <div class="row ml-3">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              Personal information
            </div>
            <div class="card-body">
              <p class="name"><?php echo " Name : " . $_SESSION["full_name"];?></p>
              <p class="name"><?php echo " Email : " . $db["email"];?></p>
              <p class="name"><?php echo " Present Adress : " . $db["present_adress"];;?></p>
              <p class="name"><?php echo " Blood Group : " . $db["blood_group"];;?></p>
              <p class="name"><?php echo " Phone Number : " . $db["my_phone_number"];;?></p>
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-header">
              Educational information
            </div>
            <div class="card-body">
              <p class="name"><?php echo " Batch : " . $db["batch"];;?></p>
              <p class="name"><?php echo " Exam Roll : " . $db["exam_roll"];;?></p>
              <p class="name"><?php echo " Class Roll : " . $db["class_roll"];;?></p>
            </div>
          </div>
        </div>
      </div>
      
     












    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
