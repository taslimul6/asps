<?php
 require_once("temp-parts/header.php");

$db = mysqli_query($connection, "SELECT * FROM notices");
$row = mysqli_num_rows($db);


?>




        <div class="container-fluid">
            <h2 class= "m-3 text-center" >Notices</h2>
        </div>
      
        <div class="row m-3">
            <?php 
           
            foreach($db as $line){ ?>


           
            <div class="col-sm-6">
                <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $line['title']; ?></h5>
                    <p class="card-text"><?php echo $line["content"]; ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            <?php } ?>
        </div>
                
            
            



 <?php require_once("temp-parts/footer.php");?>