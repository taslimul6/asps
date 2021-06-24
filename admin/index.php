<?php require_once("templete-parts/header.php");

require_once("logic.php");
$noticeDB = mysqli_query($connection,"SELECT * FROM notices ORDER BY id DESC LIMIT 5;");
  $forumDB = mysqli_query($connection,"SELECT * FROM forum_post ORDER BY id DESC LIMIT 5;");
  $jobDB = mysqli_query($connection,"SELECT * FROM job ORDER BY id DESC LIMIT 5;");
?>

      <div class="container-fluid">
        <h2 class= "m-3 text-center" >Dashboard</h2>
      </div>
      
      <div class="row ml-3">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              Personal information
            </div>
            <div class="card-body">
              <p class="name"><?php echo " Name : " . $db["full_name"];?></p>
              <p class="name"><?php echo " Position : " . $db["position"];?></p>
              <p class="name"><?php echo " Email : " . $db["email"];?></p>
              <p class="name"><?php echo " Present Adress : " . $db["present_adress"];?></p>
              <p class="name"><?php echo " Blood Group : " . $db["blood_group"];?></p>
              
              <p class="name"><?php echo " Phone Number : " . $db["my_phone_number"];?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header text-center">
              Notice Board
            </div>
            <div class="card-body">
              <?php foreach($noticeDB as $line){?>
              <a href="viewnotice.php?id=<?php echo $line['noticeid']?>" class="name text-danger"><?php
                $con1 = $line["title"];
                $con2=explode(" ",$con1);
                $con3=array_slice($con2,0,9);
                $finalcon =implode(" ",$con3);
                ?>
                 <span class="badge badge-danger">New</span>
                <?php echo $finalcon . " . . . .";?></a>
              <?php }?>
              
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-header text-center">
              Latest Forum Post
            </div>
            <div class="card-body">
              <?php foreach($forumDB as $line){?>
              <a href="viewpost.php?id=<?php echo $line['postid']?>" class="name text-danger"><?php
                $con1 = $line["description"];
                $con2=explode(" ",$con1);
                $con3=array_slice($con2,0,9);
                $finalcon =implode(" ",$con3);
                ?>
                 <span class="badge badge-danger">New</span>
                <?php echo $finalcon . " . . . ." . "<br>";?></a>
              <?php }?>
              
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-header text-center">
              Latest Job Circular
            </div>
            <div class="card-body">
              <?php foreach($jobDB as $line){?>
              <a href="viewjob.php?id=<?php echo $line['jobid']?>" class="name text-danger"><?php
                $con1 = $line["title"];
                $con2=explode(" ",$con1);
                $con3=array_slice($con2,0,9);
                $finalcon =implode(" ",$con3);
                ?>
                 <span class="badge badge-danger">New</span>
                <?php echo $finalcon . " . . . ." . "<br>";?></a>
              <?php }?>
              
            </div>
          </div>
          </div>


      </div>
      
     











      <?php require_once("templete-parts/footer.php") ?>
