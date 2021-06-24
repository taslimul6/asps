<?php 
  require_once("templete-parts/header.php");

  $id = $_GET['id'];
  $dbp = mysqli_query($connection, "SELECT * FROM books WHERE book_id= '$id' ");
  $dbmain0 = mysqli_fetch_assoc($dbp);
  
?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >View Book or Notes</h2>
      </div>
      
      <div class="row ml-3">
            <div class="col-sm-10 m-auto">
            
                <div class="card mt-3">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $dbmain0['title']; ?></h3>
                        <h5 class="card-subtitle my-3 text-muted"><?php echo "Uploaded by: " . $dbmain0['auther']; ?></h5>
                        <h6 class="card-subtitle my-3 text-muted"><?php echo   $dbmain0['date'] . " - " . "Semister: " . $dbmain0['sem'] . " - " . " Subject Code : " . $dbmain0['sub_code'];; ?></h6>
                        <p class="card-text"><?php echo $dbmain0["description"]; ?></p>
                        <a href="<?php echo $dbmain0['file']; ?>">Download File</a>
                        

                        
                    </div>
                </div>

            </div>
      </div>
      
     







      <?php require_once("templete-parts/footer.php");?>
