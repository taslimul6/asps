<?php 
  require_once("temp-parts/header.php");




  if(isset($_POST['upload'])){
      if(isset($_FILES['1'])){

        $file = $_FILES['1'];
        $sem = "1st-";
       
    
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
            $newname = "receipt" . $sem . $_SESSION["roll"] . "." . $fileActualExt;
            $destination = "uploads/" . $newname;
            move_uploaded_file($file_tname,  $destination);
            mysqli_query($connection , "UPDATE images SET sem1 = '$destination' WHERE exam_roll = '$roll';"); 
            $success['uploaded'] = "Your file is uploaded successfully";
    
            }else{
            $error['size']="Your image size is larger than 2mb";
            }
    
        }else{
            $error['error']="There was an error on this file une another";
        }
    
        }
        else{
        $error['allow']="File extension is not allowd. Please use jpg,jpeg or png file.";
        }
    }
    if(isset($_FILES['2'])){

        $file = $_FILES['2'];
        $sem = "2st-";
       
    
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
            $newname = "receipt" . $sem . $_SESSION["roll"] . "." . $fileActualExt;
            $destination = "uploads/" . $newname;
            move_uploaded_file($file_tname,  $destination);
            mysqli_query($connection , "UPDATE images SET sem2 = '$destination' WHERE exam_roll = '$roll';"); 
            $success['uploaded'] = "Your file is uploaded successfully";
    
            }else{
            $error['size']="Your image size is larger than 2mb";
            }
    
        }else{
            $error['error']="There was an error on this file une another";
        }
    
        }
        else{
        $error['allow']="File extension is not allowd. Please use jpg,jpeg or png file.";
        }
    }
    if(isset($_FILES['3'])){

        $file = $_FILES['3'];
        $sem = "3st-";
       
    
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
            $newname = "receipt" . $sem . $_SESSION["roll"] . "." . $fileActualExt;
            $destination = "uploads/" . $newname;
            move_uploaded_file($file_tname,  $destination);
            mysqli_query($connection , "UPDATE images SET sem3 = '$destination' WHERE exam_roll = '$roll';"); 
            $success['uploaded'] = "Your file is uploaded successfully";
    
            }else{
            $error['size']="Your image size is larger than 2mb";
            }
    
        }else{
            $error['error']="There was an error on this file une another";
        }
    
        }
        else{
        $error['allow']="File extension is not allowd. Please use jpg,jpeg or png file.";
        }
    }
    if(isset($_FILES['4'])){

        $file = $_FILES['4'];
        $sem = "4st-";
       
    
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
            $newname = "receipt" . $sem . $_SESSION["roll"] . "." . $fileActualExt;
            $destination = "uploads/" . $newname;
            move_uploaded_file($file_tname,  $destination);
            mysqli_query($connection , "UPDATE images SET sem4 = '$destination' WHERE exam_roll = '$roll';"); 
            $success['uploaded'] = "Your file is uploaded successfully";
    
            }else{
            $error['size']="Your image size is larger than 2mb";
            }
    
        }else{
            $error['error']="There was an error on this file une another";
        }
    
        }
        else{
        $error['allow']="File extension is not allowd. Please use jpg,jpeg or png file.";
        }
    }
    if(isset($_FILES['5'])){

        $file = $_FILES['5'];
        $sem = "5st-";
       
    
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
            $newname = "receipt" . $sem . $_SESSION["roll"] . "." . $fileActualExt;
            $destination = "uploads/" . $newname;
            move_uploaded_file($file_tname,  $destination);
            mysqli_query($connection , "UPDATE images SET sem5 = '$destination' WHERE exam_roll = '$roll';"); 
            $success['uploaded'] = "Your file is uploaded successfully";
    
            }else{
            $error['size']="Your image size is larger than 2mb";
            }
    
        }else{
            $error['error']="There was an error on this file une another";
        }
    
        }
        else{
        $error['allow']="File extension is not allowd. Please use jpg,jpeg or png file.";
        }
    }
    if(isset($_FILES['6'])){

        $file = $_FILES['6'];
        $sem = "6st-";
       
    
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
            $newname = "receipt" . $sem . $_SESSION["roll"] . "." . $fileActualExt;
            $destination = "uploads/" . $newname;
            move_uploaded_file($file_tname,  $destination);
            mysqli_query($connection , "UPDATE images SET sem6 = '$destination' WHERE exam_roll = '$roll';"); 
            $success['uploaded'] = "Your file is uploaded successfully";
    
            }else{
            $error['size']="Your image size is larger than 2mb";
            }
    
        }else{
            $error['error']="There was an error on this file une another";
        }
    
        }
        else{
        $error['allow']="File extension is not allowd. Please use jpg,jpeg or png file.";
        }
    }
    if(isset($_FILES['7'])){

        $file = $_FILES['7'];
        $sem = "7st-";
       
    
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
            $newname = "receipt" . $sem . $_SESSION["roll"] . "." . $fileActualExt;
            $destination = "uploads/" . $newname;
            move_uploaded_file($file_tname,  $destination);
            mysqli_query($connection , "UPDATE images SET sem7 = '$destination' WHERE exam_roll = '$roll';"); 
            $success['uploaded'] = "Your file is uploaded successfully";
    
            }else{
            $error['size']="Your image size is larger than 2mb";
            }
    
        }else{
            $error['error']="There was an error on this file une another";
        }
    
        }
        else{
        $error['allow']="File extension is not allowd. Please use jpg,jpeg or png file.";
        }
    }
    if(isset($_FILES['8'])){

        $file = $_FILES['8'];
        $sem = "8st-";
       
    
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
            $newname = "receipt" . $sem . $_SESSION["roll"] . "." . $fileActualExt;
            $destination = "uploads/" . $newname;
            move_uploaded_file($file_tname,  $destination);
            mysqli_query($connection , "UPDATE images SET sem8 = '$destination' WHERE exam_roll = '$roll';"); 
            $success['uploaded'] = "Your file is uploaded successfully";
    
            }else{
            $error['size']="Your image size is larger than 2mb";
            }
    
        }else{
            $error['error']="There was an error on this file une another";
        }
    
        }
        else{
        $error['allow']="File extension is not allowd. Please use jpg,jpeg or png file.";
        }
    }
  
  
  
  }
    $showP = mysqli_query($connection, "SELECT * FROM images WHERE exam_roll = '$roll'"); 
    $show = mysqli_fetch_assoc($showP);
   
?>

    <div class="container-fluid">
    <h2 class= "m-3 text-center" >Payment Status</h2>
    </div>
    
    <div class="row ml-3">
        <div class="col-md-10">
            <div class="alert alert-success">
                
                    Please upload your receipt every semester after you pay your semister fees.
                    All data will use for future reference and official use.
                
            </div>
        </div> 

        <div class="col-md-10 mb-4">
            <div class="error">
                <?php 
                        
                    if(isset($error['size'])){
                        echo  $error['size'];

                    }
                    if(isset($error['error'])){
                        echo  $error['error'];

                    }
                    if(isset($error['allow'])){
                        echo  $error['allow'];

                    }
                        
                ?>
            </div>
        </div>
    </div>

    <div class="row m-3">
 
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">1st Semester</h5>
                <p class="card-text">
                <div class="img-wrap mx-auto d-block">
                    <img src="<?php echo $show['sem1'] ?>" class="rounded img-fluid d-block m-auto" style="max-width:95%; max-height:50vh;border:3px solid #666666;overflow:hidden;" alt="Payment Receipt"> 
                </div>
                </p>

                
                <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="formFile" class="form-label"></label>
                    <input class="form-control" type="file" id="formFile" name="1">
                </div>
                    <button class="btn btn-primary" name="upload">Upload</button>
                   
                
                
                </form>
                
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">2nd Semester</h5>
                <p class="card-text">
                <div class="img-wrap mx-auto d-block" style="max-width:95%; max-height:50vh;border:3px solid #666666;overflow:hidden;">
                    <img src="<?php echo $show['sem2'] ?>" class="rounded img-fluid "  alt="Payment Receipt"> 
                </div>
                </p>

                
                <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="formFile" class="form-label"></label>
                    <input class="form-control" type="file" id="formFile" name="2">
                </div>
                    <button class="btn btn-primary" name="upload">Upload</button>
                   
                
                
                </form>
                
            </div>
            </div>
        </div>

       
          

    </div>


        <div class="row m-3">
 
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">3rd Semester</h5>
                <p class="card-text">
                <div class="img-wrap mx-auto d-block" style="max-width:95%; max-height:50vh;border:3px solid #666666;overflow:hidden;">
                    <img src="<?php echo $show['sem3'] ?>" class="rounded img-fluid "  alt="Payment Receipt"> 
                </div>
                </p>

                
                <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="formFile" class="form-label"></label>
                    <input class="form-control" type="file" id="formFile" name="3">
                </div>
                    <button class="btn btn-primary" name="upload">Upload</button>
                   
                
                
                </form>
                
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">4th Semester</h5>
                <p class="card-text">
                <div class="img-wrap mx-auto d-block" style="max-width:95%; max-height:50vh;border:3px solid #666666;overflow:hidden;">
                    <img src="<?php echo $show['sem4'] ?>" class="rounded img-fluid "  alt="Payment Receipt"> 
                </div>
                </p>

                
                <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="formFile" class="form-label"></label>
                    <input class="form-control" type="file" id="formFile" name="4">
                </div>
                    <button class="btn btn-primary" name="upload">Upload</button>
                   
                
                
                </form>
                
            </div>
            </div>
        </div>

       
          

    </div>

    <div class="row m-3">
 
 <div class="col-sm-6">
     <div class="card">
     <div class="card-body">
         <h5 class="card-title">5th Semester</h5>
         <p class="card-text">
         <div class="img-wrap mx-auto d-block" style="max-width:95%; max-height:50vh;border:3px solid #666666;overflow:hidden;">
             <img src="<?php echo $show['sem5'] ?>" class="rounded img-fluid "  alt="Payment Receipt"> 
         </div>
         </p>

         
         <form action="" method="post" enctype="multipart/form-data">
         <div class="mb-3">
             <label for="formFile" class="form-label"></label>
             <input class="form-control" type="file" id="formFile" name="5">
         </div>
             <button class="btn btn-primary" name="upload">Upload</button>
            
         
         
         </form>
         
     </div>
     </div>
 </div>
 <div class="col-sm-6">
     <div class="card">
     <div class="card-body">
         <h5 class="card-title">6th Semester</h5>
         <p class="card-text">
         <div class="img-wrap mx-auto d-block" style="max-width:95%; max-height:50vh;border:3px solid #666666;overflow:hidden;">
             <img src="<?php echo $show['sem6'] ?>" class="rounded img-fluid "  alt="Payment Receipt"> 
         </div>
         </p>

         
         <form action="" method="post" enctype="multipart/form-data">
         <div class="mb-3">
             <label for="formFile" class="form-label"></label>
             <input class="form-control" type="file" id="formFile" name="6">
         </div>
             <button class="btn btn-primary" name="upload">Upload</button>
            
         
         
         </form>
         
     </div>
     </div>
 </div>
 


   

</div>
<div class="row m-3">
 
 <div class="col-sm-6">
     <div class="card">
     <div class="card-body">
         <h5 class="card-title">7th Semester</h5>
         <p class="card-text">
         <div class="img-wrap mx-auto d-block" style="max-width:95%; max-height:50vh;border:3px solid #666666;overflow:hidden;">
             <img src="<?php echo $show['sem7'] ?>" class="rounded img-fluid "  alt="Payment Receipt"> 
         </div>
         </p>

         
         <form action="" method="post" enctype="multipart/form-data">
         <div class="mb-3">
             <label for="formFile" class="form-label"></label>
             <input class="form-control" type="file" id="formFile" name="7">
         </div>
             <button class="btn btn-primary" name="upload">Upload</button>
            
         
         
         </form>
         
     </div>
     </div>
 </div>
 <div class="col-sm-6">
     <div class="card">
     <div class="card-body">
         <h5 class="card-title">8th Semester</h5>
         <p class="card-text">
         <div class="img-wrap mx-auto d-block" style="max-width:95%; max-height:50vh;border:3px solid #666666;overflow:hidden;">
             <img src="<?php echo $show['sem8'] ?>" class="rounded img-fluid "  alt="Payment Receipt"> 
         </div>
         </p>

         
         <form action="" method="post" enctype="multipart/form-data">
         <div class="mb-3">
             <label for="formFile" class="form-label"></label>
             <input class="form-control" type="file" id="formFile" name="8">
         </div>
             <button class="btn btn-primary" name="upload">Upload</button>
            
         
         
         </form>
         
     </div>
     </div>
 </div>


   

</div>













    </div>
      
     







<?php require_once("temp-parts/footer.php");?>
