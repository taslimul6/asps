<?php 
  require_once("temp-parts/header.php");

$comid =$_GET['id'];
$post = $_GET['postid'];


if (isset($_POST['delete'])){
 


  $uploaded = mysqli_query($connection , " DELETE FROM comment WHERE comid =  '$comid';");
  header("location: viewpost.php?id=$post&delete='comment'");



  }



?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" ></h2>
      </div>
      
      <div class="row mt-5">
       <div class="col-md-12 text-center">
       <h2>Confirm Delete this Job Post?</h2>
       <form action="" method="post">
       <button name="delete" class="btn btn-danger mt-5 px-5">Delete</button>
       
       
       </form>
      
       
       </div>

      
      
      
      </div>
      
     







<?php require_once("temp-parts/footer.php");?>
