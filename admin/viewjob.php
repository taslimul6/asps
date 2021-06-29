<?php 
  require_once("templete-parts/header.php");

  $id = $_GET['id'];
  $dbp = mysqli_query($connection, "SELECT * FROM job WHERE jobid= '$id' ");
  $dbmain0 = mysqli_fetch_assoc($dbp);
  
?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >View Job</h2>
      </div>
      
      <div class="row ml-3">
            <div class="col-sm-10 m-auto">
            
                <div class="card mt-3">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $dbmain0['title']; ?></h3>
                        <h6 class="card-subtitle my-3 text-muted"><?php echo "Updated by: " . $dbmain0['student'] . " - " . $dbmain0['date'] . " - " . "Batch: " . $dbmain0['batch']; ?></h6>
                        <p class="card-text"><?php echo $dbmain0["description"]; ?></p>
                        <a href="<?php echo $dbmain0['img']; ?>">Download File</a>
                        

                        
                    </div>
                    <img src="<?php echo $dbmain0['img']; ?>" class="" width="560"alt="">
                </div>

            </div>
      </div>
      
     






<?php require_once("templete-parts/footer.php");?>
