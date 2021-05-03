<?php 
  require_once("templete-parts/header.php");
  $comid = $_GET['id'];
  $dbj = mysqli_query($connection, "SELECT * FROM comment WHERE comid='$comid'");
  $row = mysqli_num_rows($dbj);
  $dbmain0 = mysqli_fetch_array($dbj);

  $des = $dbmain0['com'];


if (isset($_POST['upload'])){
  
  
  $description = $_POST["description"];


  $uploaded = mysqli_query($connection , "UPDATE comment SET com = '$description' WHERE comid =  '$comid';");
  
  if(isset($uploaded)){
    $success['upload']= "Your Comment is Updated successfully";
  }


  }



?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >Edit This Comment</h2>
      </div>
      
      <div class="row m-2">
        <div class="col-md-8 m-auto">
          <div class="success text-success my-4">
            <?php if(isset($success['upload'])){
              echo $success['upload'];
            } ?>
          
          </div>
          <form class="post p-3 rounded" method="post" enctype="multipart/form-data" >
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"></label>
              <textarea name= "description" class="form-control" id="exampleFormControlTextarea1" rows="3" > <?php echo $des;?></textarea>
            </div>
              <button type="submit" name="upload" class="btn btn-primary justify-content-center"> Update Comment</button>
          </form>


        </div>

        
          

      </div>