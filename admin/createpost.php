<?php 
  require_once("templete-parts/header.php");
  $dbj = mysqli_query($connection, "SELECT * FROM forum_post");
  $row = mysqli_num_rows($dbj);


  
$today = date("j F Y");  
$student = $db["full_name"];

$postid = rand();





if (isset($_POST['upload'])){
  
  
  $description = $_POST["description"];


  $uploaded = mysqli_query($connection , "INSERT INTO forum_post( description , student , date, postid) VALUES('$description' , '$student' , '$today' , '$postid');");
  
  if(isset($uploaded)){
    $success['upload']= "Your Post is Updated successfully";
  }


  }



?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >Create Post</h2>
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
              <textarea name= "description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Whats on your mind, <?php echo $db['full_name'] . '?'?> "></textarea>
            </div>
              <button type="submit" name="upload" class="btn btn-primary justify-content-center"> Update Post</button>
          </form>


        </div>

        
          

      </div>


      <?php   require_once("templete-parts/footer.php");?>