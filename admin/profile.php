<?php

require_once("templete-parts/header.php") ;

require_once("../rprocess.php");

$email= $_SESSION["email"];
$dbmain = $connection -> query("SELECT * FROM teachers WHERE email = '$email'");
$db = mysqli_fetch_array($dbmain);




?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >Profile</h2>
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
