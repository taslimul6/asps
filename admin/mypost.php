<?php 
  require_once("templete-parts/header.php");
  $name= $db["full_name"];
  $dbp = mysqli_query($connection, "SELECT * FROM forum_post WHERE student = '$name' ORDER BY id DESC");
  $row = mysqli_num_rows($dbp);

 


?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >My Post</h2>
      </div>
      
      <div class="row m-1">
        <?php if($row == 0){
            ?>
       

      <div class="col-sm-10 m-auto">
        <h3>You didn't create any post yet!</h3>
      </div>

     <?php } ?>

      
      
        
        
          <?php
            foreach($dbp as $line){ ?>

        <div class="col-sm-10 m-auto">
      
          <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title"><?php echo $line['student']; ?></h5>
               
                <h6 class="card-subtitle my-3 text-muted"><?php echo $line['date'] . " - " . "Batch: " . $line['batch']; ?></h6>
                <p class="card-text"><?php echo $line["description"]; ?></p>

                <a href="editpost.php?id=<?php echo $line['postid'];?>" class="btn btn-primary">Edit This Post</a>
                <a href="deletepost.php?id=<?php echo $line['postid'];?>" class="btn btn-danger">Delete This Post</a>
            </div>
          </div>
        
        </div>
              <?php }?>
      
    </div>
     




<?php require_once("templete-parts/footer.php");?>
