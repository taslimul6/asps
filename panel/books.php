<?php
 require_once("temp-parts/header.php");

$db = mysqli_query($connection, "SELECT * FROM books");
$row = mysqli_num_rows($db);

if(isset($_POST['sub_code'])){
  $sub= $_POST['sub_code'];
  $db1=mysqli_query($connection, "SELECT * FROM books WHERE sub_code ='$sub' ");
}

if(isset($_POST['semester'])){
  $sem= $_POST['semester'];
  $db2=mysqli_query($connection, "SELECT * FROM books WHERE sem ='$sem'");
}




?>




        <div class="container-fluid">
            <h2 class= "m-3 text-center" >Books / Notes</h2>
        </div>
        <div class="row m-3 ">
          <div class="col-md-5 m-auto">
          
  
            <form style=" " class="m-3" method="POST">
            <div class="form-row mt-3">
                <div class="col-6">
                <label class=" " for="inlineFormInput">Subject Code</label>
                <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="113" name="sub_code">
                <button type="submit" class="btn btn-primary mb-2" name="src">Search</button>
                </div>
            </div>
            </form>
          </div>
          <div class="col-md-6 m-auto">
            <form style=" " class="m-3" method="POST">
            <div class="form-row mt-3">
                <div class="col-auto">
                <label class=" " for="inlineFormInput">Semester</label>
                <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="2nd" name="semester">
                
                <button type="submit" class="btn btn-primary mb-2" name="src">Search</button>
                </div>
            </div>
            </form>
          </div>
            
       


        </div>
      
        <div class="row m-3">



            <?php 
            
            if(isset($_POST['semester'])){
              ?>
              <div class="col-md-12">
              <h3 class="text-center m-3">Books for <?php echo $sem;?> semester</h3>
              
              </div>
             
             <?php

              foreach($db2 as $line){ ?>

                <div class="col-sm-10 m-auto">
                  
                    <div class="card mt-3">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $line['title']; ?></h3>
                        <h6 class="card-subtitle my-3 text-muted"><?php echo $line['auther'] . " - " . $line['date'] . " - " . $line['sub_code']; ?></h6>
                        <p class="card-text"><?php echo $line["description"]; ?></p>
    
                        <a href="viewbook.php?id=<?php echo $line['book_id']?>" class="btn btn-primary">View Book/ Notes</a>
                    </div>
                    </div>
                </div>
                <?php }
            }
                 if(isset($_POST['sub_code'])){
                  ?>
                  <div class="col-md-12">
                  <h3 class="text-center m-3">Books for Subject code : <?php echo $sub; ?></h3>
                  
                  </div>
                 
                 <?php



                  foreach($db1 as $line){ ?>
    
                    <div class="col-sm-10 m-auto">
                      
                        <div class="card mt-3">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $line['title']; ?></h3>
                            <h6 class="card-subtitle my-3 text-muted"><?php echo $line['auther'] . " - " . $line['date'] . " - " . $line['sub_code']; ?></h6>
                            <p class="card-text"><?php echo $line["description"]; ?></p>
        
                            <a href="viewbook.php?id=<?php echo $line['book_id']?>" class="btn btn-primary">View Book/ Notes</a>
                        </div>
                        </div>
                    </div>
                    <?php }


                  } else{
                     ?>
                     <div class="col-md-12">
                     <h3 class="text-center m-3">All Books</h3>
                     
                     </div>
                    
                    <?php
           
                    foreach($db as $line){ ?>
        
        
                   
                    <div class="col-sm-10 m-auto">
                      
                        <div class="card mt-3">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $line['title']; ?></h3>
                            <h6 class="card-subtitle my-3 text-muted"><?php echo $line['auther'] . " - " . $line['date'] . " - " . $line['sub_code']; ?></h6>
                            <p class="card-text"><?php echo $line["description"]; ?></p>
        
                            <a href="viewbook.php?id=<?php echo $line['book_id']?>" class="btn btn-primary">View Book/ Notes</a>
                        </div>
                        </div>
                    </div>
                    <?php } }?>

            
        </div>
                
            
            



 <?php require_once("temp-parts/footer.php");?>