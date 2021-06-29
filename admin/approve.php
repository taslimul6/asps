<?php  require_once("templete-parts/header.php");

$exam_roll =$_GET['id'];



if (isset($_POST['delete'])){
 


  $uploaded = mysqli_query($connection , "UPDATE students SET auth = '1' WHERE exam_roll = '$exam_roll';");
  header("location: new_student.php?app='true'");



  }



?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" ></h2>
      </div>
      
      <div class="row mt-5">
       <div class="col-md-12 text-center">
       <h2>Confirm Approve This Student to This Portal?</h2>
       <form action="" method="post">
       <button name="delete" class="btn btn-success mt-5 px-5">APPROVE</button>
       
       
       </form>
      
       
       </div>

      
      
      
      </div>
      
     







      <?php require_once("templete-parts/footer.php");?>
