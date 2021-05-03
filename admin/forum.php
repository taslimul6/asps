<?php 
  require_once("templete-parts/header.php");
  $dbp = mysqli_query($connection, "SELECT * FROM forum_post ORDER BY id DESC");
  $row = mysqli_num_rows($dbp);

 


?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >Forum / News Feed</h2>
      </div>
      
      <div class="row m-1">
      <div class="col-md-5 m-auto">
          <a class="btn btn-success m-3 d-block" href="createpost.php"> Create a Post</a>
        </div>
        <div class="col-md-5 m-auto">
          <a class="btn btn-success m-3 m-auto d-block" href="mypost.php"> View My Post</a>
        </div>
      
        
        
          <?php
            foreach($dbp as $line){ ?>

        <div class="col-sm-10 m-auto">
      
          <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title"><?php echo $line['student']; ?></h5>
               
                <h6 class="card-subtitle my-3 text-muted"><?php echo $line['date'] . " - " . "Batch: " . $line['batch']; ?></h6>
                <p class="card-text"><?php echo $line["description"]; ?></p>

                <a href="viewpost.php?id=<?php echo $line['postid'];?>" class="btn btn-primary">View Full Post</a>
            </div>
          </div>
        
        </div>
              <?php }?>
      
    </div>
     







<?php require_once("templete-parts/footer.php");?>
