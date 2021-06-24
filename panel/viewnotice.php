<?php 
  require_once("temp-parts/header.php");

  $id = $_GET['id'];
  $dbp = mysqli_query($connection, "SELECT * FROM notices WHERE noticeid= '$id' ");
  $dbmain0 = mysqli_fetch_assoc($dbp);
  
?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >View Notice</h2>
      </div>
      
      <div class="row ml-3">
            <div class="col-sm-10 m-auto">
            
                <div class="card mt-3">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $dbmain0['title']; ?></h3>
                        <h6 class="card-subtitle my-3 text-muted"><?php echo "Updated by: " . $dbmain0['auther'] . " - " . $dbmain0['date'] ; ?></h6>
                        <p class="card-text"><?php echo $dbmain0["content"]; ?></p>
                        <a href="<?php echo $dbmain0['file']; ?>">Download File</a>
                        

                        
                    </div>
                    <img src="<?php echo $dbmain0['img']; ?>" class="" width="560"alt="">
                </div>

            </div>
      </div>
      
     







<?php require_once("temp-parts/footer.php");?>
