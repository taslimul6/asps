<?php 
  require_once("temp-parts/header.php");

  $id = $_GET['id'];
  $dbp = mysqli_query($connection, "SELECT * FROM journal WHERE journalid= '$id' ");
  $dbmain0 = mysqli_fetch_assoc($dbp);
  
?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >View Paper</h2>
      </div>
      
      <div class="row ml-3">
            <div class="col-sm-10 m-auto">
            
                <div class="card mt-3">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $dbmain0['title']; ?></h3>
                        <h5 class="card-subtitle my-3 text-muted"><?php echo "Supervised by: " . $dbmain0['superviser']; ?></h5>
                        <h6 class="card-subtitle my-3 text-muted"><?php echo $dbmain0['student_name'] . " - " . $dbmain0['date'] . " - " . "Batch: " . $dbmain0['batch']; ?></h6>
                        <p class="card-text"><?php echo $dbmain0["description"]; ?></p>
                        

                        
                    </div>
                </div>

            </div>
      </div>
      
     







<?php require_once("temp-parts/footer.php");?>
