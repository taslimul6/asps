<?php 
  require_once("templete-parts/header.php");
if(isset($_POST['upload'])){
$roll = $_POST['roll'];
$dir = "../panel/";


  
    $showP = mysqli_query($connection, "SELECT * FROM images WHERE exam_roll = '$roll'"); 
    $show = mysqli_fetch_assoc($showP);
}
   
?>

    <div class="container-fluid">
    <h2 class= "m-3 text-center" >Payment Status</h2>
    </div>
    
    <div class="row ml-3">
        <div class="col-md-5 m-auto">
    
    
                <form action="" class="m-4" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Enter Exam Roll</label>
                    <input class="form-control" type="number" id="formFile" name="roll" placeholder= "136">
                </div>
                    <button class="btn btn-primary" name="upload">Search</button>
                   
                
                
                </form>
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
    <?php if(isset($_POST['upload'])){?>

    <div class="row m-3">
 
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">1st Semester</h5>
                <p class="card-text">
                <div class="img-wrap mx-auto d-block">
                    <img src="<?php echo $dir . $show['sem1'] ?>" class="rounded img-fluid d-block m-auto" style="max-width:95%; max-height:50vh;border:3px solid #666666;overflow:hidden;" alt="Payment Receipt"> 
                </div>
                </p>

                
                
                
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">2nd Semester</h5>
                <p class="card-text">
                <div class="img-wrap mx-auto d-block" >
                    <img style="max-width:95%; max-height:50vh;border:3px solid #666666;overflow:hidden;" src="<?php echo  $dir .  $show['sem2'] ?>" class="rounded img-fluid d-block m-auto"  alt="Payment Receipt"> 
                </div>
                </p>

                
                
                
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
                <div class="img-wrap mx-auto d-block" >
                    <img src="<?php echo  $dir . $show['sem3'] ?>" class="rounded img-fluid d-block m-auto "  alt="Payment Receipt" style="max-width:95%; max-height:50vh;border:3px solid #666666;overflow:hidden;"> 
                </div>
                </p>

                
                
                
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">4th Semester</h5>
                <p class="card-text">
                <div class="img-wrap mx-auto d-block" >
                    <img style="max-width:95%; max-height:50vh;border:3px solid #666666;overflow:hidden;" src="<?php echo  $dir . $show['sem4'] ?>" class="rounded img-fluid d-block m-auto "  alt="Payment Receipt"> 
                </div>
                </p>

                
                
                
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
         <div class="img-wrap mx-auto d-block" >
             <img style="max-width:95%; max-height:50vh;border:3px solid #666666;overflow:hidden;" src="<?php echo  $dir . $show['sem5'] ?>" class="rounded img-fluid d-block m-auto "  alt="Payment Receipt"> 
         </div>
         </p>

         
         
         
     </div>
     </div>
 </div>
 <div class="col-sm-6">
     <div class="card">
     <div class="card-body">
         <h5 class="card-title">6th Semester</h5>
         <p class="card-text">
         <div class="img-wrap mx-auto d-block" >
             <img style="max-width:95%; max-height:50vh;border:3px solid #666666;overflow:hidden;" src="<?php echo  $dir . $show['sem6'] ?>" class="rounded img-fluid d-block m-auto"  alt="Payment Receipt"> 
         </div>
         </p>

         
         
         
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
         <div class="img-wrap mx-auto d-block" >
             <img style="max-width:95%; max-height:50vh;border:3px solid #666666;overflow:hidden;" src="<?php echo  $dir . $show['sem7'] ?>" class="rounded img-fluid d-block m-auto "  alt="Payment Receipt"> 
         </div>
         </p>

         
         
         
     </div>
     </div>
 </div>
 <div class="col-sm-6">
     <div class="card">
     <div class="card-body">
         <h5 class="card-title">8th Semester</h5>
         <p class="card-text">
         <div class="img-wrap mx-auto d-block" >
             <img style="max-width:95%; max-height:50vh;border:3px solid #666666;overflow:hidden;" src="<?php echo  $dir . $show['sem8'] ?>" class="rounded img-fluid d-block m-auto "  alt="Payment Receipt"> 
         </div>
         </p>

         
         
         
     </div>
     </div>
 </div>


   

</div>




<?php }?>








    </div>
      
     







<?php require_once("templete-parts/footer.php");?>
