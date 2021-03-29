<?php require_once("templete-parts/header.php");


$today = date("j F Y");  
$auther = $db["full_name"];
$book_id = rand();


if (isset($_POST['upload'])){
  $title = $_POST["title"];
  $description = $_POST["description"];
  $semister = $_POST["semister"];
  $subcode = $_POST["subcode"];


  $uploaded = mysqli_query($connection , "INSERT INTO books( title, description , sem, sub_code ,auther, date, book_id) VALUES('$title', '$description' , '$semister' , '$subcode' , '$auther' , '$today' , '$book_id');");
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
  
    $allowed = array('pdf','doc','docx' , 'ppt' , 'pptx' , 'txt');
  
    if(in_array($fileActualExt , $allowed)){
      if($file_error == 0){
        if($file_size < 50000000){
          $newname = $subcode . "book" . $book_id . "." . $fileActualExt;
          $destination = "../uploads/books/" . $newname;
          move_uploaded_file($file_tname,  $destination);


          mysqli_query($connection , "UPDATE books SET file = '$destination' WHERE book_id = '$book_id';"); 
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
        <h2 class= "m-3 text-center" >Books / Notes</h2>
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
              <label for="exampleFormControlInput1" class="form-label">Book/Note Title</label>
              <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Basic Electronics" required >
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Description or link</label>
              <textarea name= "description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="formFileMultiple" class="form-label">Book/Note Pdf file (optional)</label>
              <input name="file" class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
              <div class="row">
                <div class="col-md-6 m-auto">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Semister</label>
                    <input name="semister" type="text" class="form-control" id="exampleFormControlInput1" placeholder="2nd">
                  </div>
                </div>
                <div class="col-md-6 m-auto">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Subject Code</label>
                    <input name="subcode" type="text" class="form-control" id="exampleFormControlInput1" placeholder="214">
                  </div>
                </div>
            
              </div>
              <button type="submit" name="upload" class="btn btn-primary justify-content-center">Upload</button>
          </form>


        </div>

        
          

      </div>

      
     

















<?php require_once("templete-parts/footer.php") ?>
