<?php

require_once("templete-parts/header.php") ;

require_once("../rprocess.php");

$email= $_SESSION["email"];
$dbmain = $connection -> query("SELECT * FROM teachers WHERE email = '$email'");
$db = mysqli_fetch_array($dbmain);
$id = $db['id'];

if(isset($_POST['upload'])){
  $file = $_FILES['profile'];

 $file_name= $file['name'];
 $file_size= $file['size'];
 $file_error= $file['error'];
 $file_tname= $file['tmp_name'];
 $file_type= $file['type'];

 $file_ext = explode("." ,  $file_name);
 $fileActualExt = strtolower(end($file_ext));

 $allowed = array('jpg','jpeg','png');

 if(in_array($fileActualExt , $allowed)){
  if($file_error == 0){
    if($file_size < 2000000){
      $newname = "pic-" . $db["id"] . "." . $fileActualExt;
      $destination = "img/profile/" . $newname;
      move_uploaded_file($file_tname,  $destination);
      mysqli_query($connection , "UPDATE teachers SET img = '$destination' WHERE id = '$id';"); 
      $success['uploaded'] = "Your file is uploaded successfully";
 
      header("location: profile.php?update='successed'");

    }}}}
     


?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >Profile</h2>
      </div>
      
      <div class="row ml-3 ">
        <div class="col-md-6 mt-5">
          <div class="card">
            <div class="card-header">
              Personal information
            </div>
            <div class="card-body">
              <p class="name"><?php echo " Name : " . $db["full_name"];?></p>
              <p class="name"><?php echo " Email : " . $db["email"];?></p>
              <p class="name"><?php echo " Present Adress : " . $db["present_adress"];;?></p>
              <p class="name"><?php echo " Blood Group : " . $db["blood_group"];;?></p>
              <p class="name"><?php echo " Phone Number : " . $db["my_phone_number"];;?></p>
            </div>
          </div>
          
        </div>
        <div class="col-md-6">
          <div class="">
          <h3 class="text-center m-2">Profile Picture</h3>
          </div>
          

          <div class="img-wrap mx-auto d-block" >
            <img src="<?php echo $db['img'] ?>" class="rounded img-fluid d-block m-auto" style="max-width:30vw; max-height:50vh;border:3px solid #666666;overflow:hidden;"  alt="profile image"> 
          </div>
          <div class="card m-3">
          
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data" >
                <input type="file" name="profile">
                <button class="btn btn-success" name="upload">Upload Profile Image</button>
              
              
              
              </form>
              <div class="alert alert-success my-2">Image should be jpg,png,jpag. Maximum image size 2mb</div>
            </div>
          </div>
      </div>
      </div>
     









      <?php require_once("templete-parts/footer.php");?>

  






