<?php 
  require_once("temp-parts/header.php");

$jobid =$_GET['id'];

$student = $db["full_name"];

$dbj = mysqli_query($connection, "SELECT * FROM job WHERE jobid='$jobid'");
$row = mysqli_num_rows($dbj);
$dbmain0 = mysqli_fetch_array($dbj);

$des = $dbmain0['description'];
$tit = $dbmain0['title'];




if (isset($_POST['upload'])){
  $title = $_POST["title"];
  
  $description = $_POST["description"];


  $uploaded = mysqli_query($connection , "UPDATE job SET title = '$title' , description = '$description'  WHERE jobid =  '$jobid';");
  if(isset($uploaded)){
    $success['upload']= "Your Job Post is Uploaded successfully";

    
  }


  }



?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >Edit Job</h2>
      </div>
      
      <div class="row m-3">

        <div class="col-md-10 m-auto">
          <div class="success text-success my-4">
            <?php if(isset($success['upload'])){
              echo $success['upload'];
            } ?>
          
          </div>
          <form method="post" enctype="multipart/form-data" >
        
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Job Title</label>
              <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Pollibiddut Job Circular" value="<?php echo $tit;?>" required >
            </div>

            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Job Description / links /Circular link</label>
              <textarea name= "description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="use links, job descriptions, last date of application"> <?php echo $des;?></textarea>
            </div>
        
              
              <button type="submit" name="upload" class="btn btn-primary justify-content-center">Job Post</button>
          </form>


        </div>

        
          

      </div>
      
     







<?php require_once("temp-parts/footer.php");?>
