<?php require_once("templete-parts/header.php") ;

$auther = $db['full_name'];
$today = date("j F Y");  
$noticeid= rand();


if(isset($_POST["create-notice"])){
    $title = $_POST["title"];
    $content = $_POST["content"];

   mysqli_query($connection, "INSERT INTO notices(title , content, auther , date , noticeid)  VALUES('$title', '$content' , '$auther' , '$today' , '$noticeid' );");
  
    
    


    $file = $_FILES['file'];
  
    $file_name= $file['name'];
    $file_size= $file['size'];
    $file_error= $file['error'];
    $file_tname= $file['tmp_name'];
    $file_type= $file['type'];
  
    $file_ext = explode("." ,  $file_name);
    $fileActualExt = strtolower(end($file_ext));
  
    $allowed = array('pdf','doc','docx' , 'ppt' , 'pptx' , 'txt' , 'jpg' , 'jpeg', 'png');
  
    if(in_array($fileActualExt , $allowed)){
      if($file_error == 0){
        if($file_size < 50000000){
          $newname =  "notice" . $noticeid . "." . $fileActualExt;
          $destination = "../uploads/notice/" . $newname;
          move_uploaded_file($file_tname,  $destination);


          mysqli_query($connection , "UPDATE notices SET files = '$destination' WHERE noticeid = '$noticeid';"); 
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

 

  


?>



        <div class="container-fluid">
            <h2 class= "m-3 text-center" >Notices</h2>
        </div>

        <?php if(isset($_GET["notice"])){
          if($_GET["notice"]=="success"){

         ?>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="alert alert-success ml-5 mr-5 p-3 " role="alert">
                    Your Notice has been Created Successfully
                </div>
            </div>
        </div>
        <?php } }?>
       
      
      
      <div class="row mt-5">
            <div class="col-md-10 m-auto p-5 login ">
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" id="examroll" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea name="content" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
              <label for="formFileMultiple" class="form-label">Notice file (optional)</label>
              <input name="file" class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
                    <div class="logaction center ">
                        <button type="submit" name="create-notice" class="btn btn-primary login-btn">Create Notice</button>

                    </div>
                </form>
            </div>
    
         </div>
      
     








         <?php require_once("templete-parts/footer.php") ?>