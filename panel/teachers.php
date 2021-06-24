<?php 
  require_once("temp-parts/header.php");
  $db = mysqli_query($connection, "SELECT * FROM teachers");
  $row = mysqli_num_rows($db);
?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >Faculty Members</h2>
      </div>
      
      <div class="row ml-3 mt-5">
      <?php
           
                    foreach($db as $line){ ?>


        <div class="col-md-6">
          <div class="card" >
            <img class="card-img-top" src="<?php echo $line['img'];?>" alt="Image">
            <div class="card-body">
              <h5 class="card-title"><?php echo $line['full_name'];?></h5>
              <h6 class="card-subtitle my-3 text-muted"><?php echo $line['position']?></h6>
                        <p class="card-text"><?php echo "Present Address: " . $line["present_adress"]; ?></p>
                        <p class="card-text"><?php echo "Permanent Address: " . $line["permanent_adress"]; ?></p>
                        <p class="card-text"><?php echo "Phone: " . $line["my_phone_number"]; ?></p>
                        <p class="card-text"><?php echo "Email: " . $line["email"]; ?></p>
            </div>
        </div>
        </div>
        <?php }?>
      </div>
      
     







<?php require_once("temp-parts/footer.php");?>
