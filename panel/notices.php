<?php
 require_once("temp-parts/header.php");

$dbn = mysqli_query($connection, "SELECT * FROM notices");
$row = mysqli_num_rows($dbn);



?>




        <div class="container-fluid">
            <h2 class= "m-3 text-center" >Notices</h2>
        </div>
      
        <div class="row m-3">
            


           
            <div class="col-sm-10 m-auto">
            <?php
            foreach($dbn as $line){ ?>

        <div class="col-sm-10 m-auto">
      
          <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title"><?php echo $line['title']; ?></h5>
               
                <h6 class="card-subtitle my-3 text-muted"><?php echo $line['auther'] . " - " . $line['date']; ?></h6>
                <p class="card-text"><?php
                $con1 = $line["content"];
                $con2=explode(" ",$con1);
                $con3=array_slice($con2,0,20);
                $finalcon =implode(" ",$con3);


                
                
                echo  $finalcon . ". . . . . . . . . . .";?></p>

                <a href="viewnotice.php?id=<?php echo $line['noticeid'];?>" class="btn btn-primary">View Notice</a>
            </div>
          </div>
        
        </div>
              <?php }?>
            </div>
           
        </div>
                
            
            



 <?php require_once("temp-parts/footer.php");?>