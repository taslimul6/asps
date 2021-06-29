<?php 
  require_once("templete-parts/header.php");
  $dbj = mysqli_query($connection, "SELECT * FROM journal ORDER BY id DESC");
  $row = mysqli_num_rows($dbj);


?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >Journal Paper</h2>
      </div>
      
      <div class="row m-1">
        <div class="col-md-5 m-auto">
          <a class="btn btn-success m-3 d-block" href="createjournal.php"> Upload Journal Paper</a>
        </div>
        <div class="col-md-5 m-auto">
          <a class="btn btn-success m-3 m-auto d-block" href="myjournal.php"> My Journal Papers</a>
        </div>
        <div class="row m-1">
        
        
          <?php
            foreach($dbj as $line){ ?>

        <div class="col-sm-10 m-auto">
      
        <div class="card mt-3">
        <div class="card-body">
            <h3 class="card-title"><?php echo $line['title']; ?></h3>
            <h5 class="card-subtitle my-3 text-muted"><?php echo "Supervised by: " . $line['superviser']; ?></h5>
            <h6 class="card-subtitle my-3 text-muted"><?php echo $line['student_name'] . " - " . $line['date'] . " - " . "Batch: " . $line['batch']; ?></h6>
            <p class="card-text"><?php echo $line["description"]; ?></p>

            <a href="viewpaper.php?id=<?php echo $line['journalid']?>" class="btn btn-primary">View Paper</a>
            <a href="deletepaper.php?id=<?php echo $line['journalid'];?>" class="btn btn-danger">Delete This Journal paper</a>
        </div>
        </div>
        
    </div>
    <?php }?>
        
        
        
        </div>
    
</div>
     







<?php require_once("templete-parts/footer.php");?>
