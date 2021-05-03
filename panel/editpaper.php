<?php 
  require_once("temp-parts/header.php");
  $journalid = $_GET['id'];
  $dbj = mysqli_query($connection, "SELECT * FROM journal WHERE journalid='$journalid'");
  $row = mysqli_num_rows($dbj);
  $dbmain0 = mysqli_fetch_array($dbj);

  $des = $dbmain0['description'];
  $tit = $dbmain0['title'];
  $sup = $dbmain0['superviser'];


if (isset($_POST['upload'])){
  
  
  $description = $_POST["description"];
  $title = $_POST['title'];
  $superviser = $_POST['superviser'];



  $uploaded = mysqli_query($connection , "UPDATE journal SET title = '$title' , description = '$description' , superviser = '$superviser' WHERE journalid =  '$journalid';");
  
  if(isset($uploaded)){
    $success['upload']= "Your Journal Paper is Edited successfully";
  }


  }



?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >Edit Paper</h2>
      </div>
      
      <div class="row m-2">
        <div class="col-md-8 m-auto">
          <div class="success text-success my-4">
            <?php if(isset($success['upload'])){
              echo $success['upload'];
            } ?>
          
          </div>
          <form method="post" enctype="multipart/form-data" >
        
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Thesis Title</label>
          <input name="title" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $tit;?>" required >
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Supervised By</label>
          <input name="superviser" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $sup;?>" required >
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Description or link</label>
          <textarea name= "description" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $des;?></textarea>
        </div>
          <button type="submit" name="upload" class="btn btn-primary justify-content-center">Update Edit</button>
      </form>


        </div>

        
          

      </div>

      <?php  require_once("temp-parts/footer.php");?>