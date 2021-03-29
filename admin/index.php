<?php require_once("templete-parts/header.php") ?>

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
      
     











      <?php require_once("templete-parts/footer.php") ?>
