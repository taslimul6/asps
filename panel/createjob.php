<?php 
  require_once("temp-parts/header.php");


  
$today = date("j F Y");  
$student = $db["full_name"];
$batch = $db["batch"];
$jobid = rand();





if (isset($_POST['upload'])){
  $title = $_POST["title"];
  
  $description = $_POST["description"];


  $uploaded = mysqli_query($connection , "INSERT INTO job( title, description , student ,batch, date, jobid) VALUES('$title', '$description' , '$student' , '$batch' , '$today' , '$jobid');");
  if(isset($uploaded)){
    $success['upload']= "Your Book or note Uploaded successfully";
  }


    $file = $_FILES['file'];
  
    $file_name= $file['name'];
    $file_size= $file['size'];
    $file_error= $file['error'];
    $file_tname= $file['tmp_name'];
    $file_type= $file['type'];
  
    $file_ext = explode("." ,  $file_name);
    $fileActualExt = strtolower(end($file_ext));
  
    $allowed = array('pdf','doc','docx' , 'ppt' , 'pptx' , 'txt' , 'jpg' , 'jpeg' , 'png');
  
    if(in_array($fileActualExt , $allowed)){
      if($file_error == 0){
        if($file_size < 50000000){
          $newname = $batch . "job" . $jobid . "." . $fileActualExt;
          $destination = "../uploads/job/" . $newname;
          move_uploaded_file($file_tname,  $destination);


          mysqli_query($connection , "UPDATE job SET img = '$destination' WHERE jobid = '$jobid';"); 
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
        <h2 class= "m-3 text-center" >Create Job / Upload Job Circular</h2>
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
              <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Pollibiddut Job Circular" required >
            </div>

            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Job Description / links /Circular link</label>
              <textarea name= "description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="use links, job descriptions, last date of application"></textarea>
            </div>
            
            <div class="mb-3">
              <label for="formFileMultiple" class="form-label">Job circular image(only jpg, jpeg,png not more than 5mb)</label>
              <input name="file" class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
              
              <button type="submit" name="upload" class="btn btn-primary justify-content-center">Job Post</button>
          </form>


        </div>

        
          

      </div>
      
     







<?php require_once("temp-parts/footer.php");?>
