<?php 
  require_once("templete-parts/header.php");
  $dbj = mysqli_query($connection, "SELECT * FROM job ORDER BY id DESC");
  $row = mysqli_num_rows($dbj);


?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >Job Circular / Job Feed</h2>
      </div>
      
      <div class="row m-1">
        <div class="col-md-5 m-auto">
          <a class="btn btn-success m-3 d-block" href="createjob.php"> Create New Job</a>
        </div>
        <div class="col-md-5 m-auto">
          <a class="btn btn-success m-3 m-auto d-block" href="myjob.php">View My Job Posts</a>
        </div>
        <div class="row m-1">
        
        
          <?php
            foreach($dbj as $line){ ?>

        <div class="col-sm-10 m-auto">
      
        <div class="card mt-3">
        <div class="card-body">
            <h3 class="card-title"><?php echo $line['title']; ?></h3>
            <h6 class="card-subtitle my-3 text-muted"><?php echo "Updated by: " . $line['student'] . " - " . $line['date'] ;
            if($line['batch'] != 0){
                echo  " - " . "Batch: " . $line['batch'];
            } ?></h6>
            <p class="card-text"><?php echo $line["description"]; ?></p>

            <a href="viewjob.php?id=<?php echo $line['jobid'];?>" class="btn btn-primary">View Job</a>
            <a href="deletejob.php?id=<?php echo $line['jobid'];?>" class="btn btn-danger">Delete Job</a>
        </div>
        </div>
        
    </div>
    <?php }?>
        
        
        
        </div>
    
</div>
     







<?php require_once("templete-parts/footer.php");?>
