<?php 
  require_once("templete-parts/header.php");
  $name= $db["full_name"];
  $dbj = mysqli_query($connection, "SELECT * FROM job WHERE student = '$name' ORDER BY id DESC");
  $row = mysqli_num_rows($dbj);


?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >My Job Posts</h2>
      </div>
      
      <div class="row m-1">
      <div class="row m-1">
        <?php if($row == 0){
            ?>
       

      <div class="col-sm-10 m-auto">
        <h3>You didn't create any Job post yet!</h3>
      </div>

     <?php } ?>

        
        <div class="row m-1">
        
        
          <?php
            foreach($dbj as $line){ ?>

        <div class="col-sm-10 m-auto">
      
        <div class="card mt-3">
        <div class="card-body">
            <h3 class="card-title"><?php echo $line['title']; ?></h3>
            <h6 class="card-subtitle my-3 text-muted"><?php echo "Updated by: " . $line['student'] . " - " . $line['date'] . " - " . "Batch: " . $line['batch']; ?></h6>
            <p class="card-text"><?php echo $line["description"]; ?></p>

            <a href="editjob.php?id=<?php echo $line['jobid'];?>" class="btn btn-primary">Edit Job</a>
            <a href="deletejob.php?id=<?php echo $line['jobid'];?>" class="btn btn-danger">Delete Job</a>
        </div>
        </div>
        
    </div>
    <?php }?>
        
        
        
        </div>
    
</div>
     
</div>










<?php require_once("templete-parts/footer.php");?>
