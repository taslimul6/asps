<?php require_once("templete-parts/header.php") ?>



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
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" id="examroll" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea name="content" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="logaction center ">
                        <button type="submit" name="create-notice" class="btn btn-primary login-btn">Create Notice</button>

                    </div>
                </form>
            </div>
    
         </div>
      
     








         <?php require_once("templete-parts/footer.php") ?>