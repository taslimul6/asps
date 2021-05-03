<?php require_once("templete-parts/header.php");

require_once("logic.php");
?>

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
              <p class="name"><?php echo " Name : " . $db["full_name"];?></p>
              <p class="name"><?php echo " Position : " . $db["position"];?></p>
              <p class="name"><?php echo " Email : " . $db["email"];?></p>
              <p class="name"><?php echo " Present Adress : " . $db["present_adress"];?></p>
              <p class="name"><?php echo " Blood Group : " . $db["blood_group"];?></p>
              
              <p class="name"><?php echo " Phone Number : " . $db["my_phone_number"];?></p>
            </div>
          </div>
        </div>
      </div>
      
     











      <?php require_once("templete-parts/footer.php") ?>
