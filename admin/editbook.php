<?php require_once("templete-parts/header.php");



$id = $_GET['id'];

$dbj = mysqli_query($connection, "SELECT * FROM books WHERE book_id='$id'");
$row = mysqli_num_rows($dbj);
$dbmain0 = mysqli_fetch_array($dbj);

$des = $dbmain0['description'];
$tit = $dbmain0['title'];
$sem = $dbmain0['sem'];
$sub = $dbmain0['sub_code'];



if (isset($_POST['upload'])){
  $title = $_POST["title"];
  $description = $_POST["description"];
  $semister = $_POST["semister"];
  $subcode = $_POST["subcode"];


  $uploaded = mysqli_query($connection , "UPDATE books SET title = '$title' , description = '$description' , sem = '$semister' , sub_code = '$subcode' WHERE book_id = $id;");
  if(isset($uploaded)){
    $success['upload']= "Your Book or note IS UPDATED successfully";
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
              <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Basic Electronics" required  value="<?php echo $tit;?>">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Description or link</label>
              <textarea name= "description" class="form-control" id="exampleFormControlTextarea1" rows="3"> <?php echo $des;?></textarea>
            </div>
        
              <div class="row">
                <div class="col-md-6 m-auto">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Semester</label>
                    <input name="semister" type="text" class="form-control" id="exampleFormControlInput1" placeholder="2nd" value="<?php echo $sem;?>">
                  </div>
                </div>
                <div class="col-md-6 m-auto">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Subject Code</label>
                    <input name="subcode" type="text" class="form-control" id="exampleFormControlInput1" placeholder="214" value="<?php echo $sub;?>">
                  </div>
                </div>
            
              </div>
              <button type="submit" name="upload" class="btn btn-primary justify-content-center">Update</button>
          </form>


        </div>

        
          

      </div>

      
     

















<?php require_once("templete-parts/footer.php") ?>
