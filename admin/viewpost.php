<?php 
  require_once("templete-parts/header.php");

  $id = $_GET['id'];
  $today = date("j F Y"); 
  $dbp = mysqli_query($connection, "SELECT * FROM forum_post WHERE postid= '$id' ORDER BY id DESC");
  $dbmain0 = mysqli_fetch_assoc($dbp);
  $dball = mysqli_query($connection, "SELECT * FROM comment WHERE postid= '$id' ORDER BY id DESC");

  if(isset($_POST['submit'])){
    $name= $db['full_name'];
    
    $com = $_POST['comment'];
    $comid = rand();
    mysqli_query($connection, "INSERT INTO comment(name,com,postid,comid,date) VALUES ('$name' , '$com' , '$id', '$comid', '$today');");
  }
  
?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >Forum</h2>
      </div>
      
      <div class="row mx-3 ">
            <div class="col-sm-10 m-auto">
            
                <div class="card mt-3">
                <div class="card-body">
                    <h3 class="card-title"><?php echo $dbmain0['student']; ?></h3>
                    <h6 class="card-subtitle my-3 text-muted"><?php echo $dbmain0['date'] . " - " . "Batch: " . $dbmain0['batch']; ?></h6>
                    <p class="card-text"><?php echo $dbmain0["description"]; ?></p>
                    <hr>

                </div>
                </div>
                

            </div>
      </div>
      <div class="row mx-3">
      

        <div class="col-sm-10 m-auto">
      
          <div class="card mt-3">
            <div class="card-body">
            <h3 class="text-center">All Comment</h3>
            <hr>

            <?php
            foreach($dball as $line){ ?>
                <h5 class="card-title ml-4 "><?php echo $line['name']; ?></h5>
               
                <h6 class="card-subtitle my-3 text-muted ml-4"><?php echo $line['date']  . " - " . "Batch: " . $line['batch']; ?></h6>
                <p class="card-text ml-4"><?php echo $line["com"]; ?></p>
                <?php if($line['name'] == $db["full_name"]){ ?>
                  <a class="ml-4" href="editcom.php?id=<?php echo $line['comid']; ?>">Edit Comment</a>
                
                
                
                <?php } ?>
                <hr>
                <?php }?>

            </div>
          </div>
        
        </div>
              
      </div>


      
        
                        
<div class="row mx-3 mt-0 mb-5">
  <div class="col-md-10 m-auto">
  

                  
                    <form method="post">
                    <div class="row">
                      <div class="col-md-8 ">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="" name='comment'>
                      </div>
                    


                    
                      <div class="col-md-4 ">
                        <button type="submit" class="btn btn-primary " name="submit">Comment</button>
                      </div>
                          </div>

                      
                    </div>
                    </form>
                   

</div>
                  
                  
          
          
      

      
     







<?php require_once("templete-parts/footer.php");?>
