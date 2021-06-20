<?php 
  require_once("temp-parts/header.php");
  $name= $db["full_name"];
  $dbj = mysqli_query($connection, "SELECT * FROM journal WHERE student_name = '$name' ORDER BY id DESC");
  $row = mysqli_num_rows($dbj);

 


?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >My Journal</h2>
      </div>
      
      <div class="row m-1">
        <?php if($row == 0){
            ?>
       

      <div class="col-sm-10 m-auto">
        <h3>You didn't create any post yet!</h3>
      </div>

     <?php } ?>

      
      
        
        
          <?php
            foreach($dbj as $line){ ?>

        <div class="col-sm-10 m-auto">
      
        <div class="card mt-3">
        <div class="card-body">
            <h3 class="card-title"><?php echo $line['title']; ?></h3>
            <h5 class="card-subtitle my-3 text-muted"><?php echo "Supervised by: " . $line['superviser']; ?></h5>
            <h6 class="card-subtitle my-3 text-muted"><?php echo $line['student_name'] . " - " . $line['date'] . " - " . "Batch: " . $line['batch']; ?></h6>
            <p class="card-text"><?php echo $line["description"]; ?></p>

            <a href="editpaper.php?id=<?php echo $line['journalid']?>" class="btn btn-primary">Edit Paper</a>
            <a href="deletepaper.php?id=<?php echo $line['jobid'];?>" class="btn btn-danger">Delete Job</a>
        </div>
        </div>
        
        </div>
              <?php }?>
      
    </div>
     







<?php require_once("temp-parts/footer.php");?>
