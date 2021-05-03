<?php require_once("templete-parts/header.php");


 $exam_roll = $_GET['id'];
 $dbstu = mysqli_query($connection, "SELECT * FROM students WHERE exam_roll = '$exam_roll';");
 $dbs = mysqli_fetch_assoc($dbstu);
 $showP = mysqli_query($connection, "SELECT * FROM images WHERE exam_roll = '$exam_roll'"); 
 $show = mysqli_fetch_assoc($showP);
 


?>


      <div class="container-fluid">
        <h2 class= "m-3 text-center" >Profile</h2>
      </div>
      
      <div class="row ml-3">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              Personal information
            </div>
            <div class="card-body">
              <p class="name"><?php echo " Name : " . $dbs["full_name"];?></p>
              <p class="name"><?php echo " Email : " . $dbs["email"];?></p>
              <p class="name"><?php echo " Present Adress : " . $dbs["present_adress"];;?></p>
              <p class="name"><?php echo " Blood Group : " . $dbs["blood_group"];;?></p>
              <p class="name"><?php echo " Phone Number : " . $dbs["my_phone_number"];;?></p>
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-header">
              Educational information
            </div>
            <div class="card-body">
              <p class="name"><?php echo " Batch : " . $dbs["batch"];;?></p>
              <p class="name"><?php echo " Exam Roll : " . $dbs["exam_roll"];;?></p>
              <p class="name"><?php echo " Class Roll : " . $dbs["class_roll"];;?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="">
          <h3 class="text-center m-2">Profile Picture</h3>
          </div>
          

          <div class="img-wrap mx-auto d-block" >
            <img src="../panel/<?php echo $show['profile'] ?>" class="rounded img-fluid d-block m-auto" style="max-width:30vw; max-height:50vh;border:3px solid #666666;overflow:hidden;"  alt="profile image"> 
          </div>
          <div class="card m-3">
          
            
          </div>
          <div class="">
          <h3 class="text-center m-2">ID Card Picture</h3>
          </div>
          <div class="img-wrap mx-auto d-block" style="max-width:20vw; max-height:50vh;border:3px solid #666666;overflow:hidden;">
            <img src="../panel/<?php echo $show['id_card']; ?>" class="rounded img-fluid "  alt="ID Card Picture"> 
          </div>
          
          


          
        
        
        </div>
      </div>
      
     











      <?php require_once("templete-parts/footer.php") ?>
