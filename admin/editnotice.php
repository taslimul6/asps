<?php require_once("templete-parts/header.php") ;


$noticeid= $_GET['id'];

$dbj = mysqli_query($connection, "SELECT * FROM notices WHERE noticeid='$noticeid'");
$row = mysqli_num_rows($dbj);
$dbmain0 = mysqli_fetch_array($dbj);

$des = $dbmain0['content'];
$tit = $dbmain0['title'];


if(isset($_POST["create-notice"])){
    $title = $_POST["title"];
    $content = $_POST["content"];

   mysqli_query($connection, "UPDATE notices SET title = '$title',content ='$content' WHERE noticeid = $noticeid;");
   header("location: notices.php?notice=success");
    
    
}


?>



        <div class="container-fluid">
            <h2 class= "m-3 text-center" >Edit Notices</h2>
        </div>

        <?php if(isset($_GET["notice"])){
          if($_GET["notice"]=="success"){

         ?>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="alert alert-success ml-5 mr-5 p-3 " role="alert">
                    Your Notice has been Edited Successfully
                </div>
            </div>
        </div>
        <?php } }?>
       
      
      
      <div class="row mt-5">
            <div class="col-md-10 m-auto p-5 login ">
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" id="examroll" name="title" value="<?php echo $tit;?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea name="content" id="" cols="30" rows="10"> <?php echo $des;?></textarea>
                    </div>
                    <div class="logaction center ">
                        <button type="submit" name="create-notice" class="btn btn-primary login-btn">Update Notice</button>

                    </div>
                </form>
            </div>
    
         </div>
      
     








         <?php require_once("templete-parts/footer.php") ?>