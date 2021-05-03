<?php



require_once("templete-parts/header.php");
require_once("../rprocess.php");

require_once("logic.php");
require_once("logic.php");


$dbi = $connection -> query("SELECT * FROM teachers ;");

$row = mysqli_num_rows($dbi);


?>



        <div class="container-fluid">
            <h2 class= "m-3 text-center" >All Teachers</h2>
        </div>
       
      
        <div class="row ml-2 mr-2">
            <div class="col-md-11 m-auto">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Position</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Blood</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            if($row>0){
                                while($rows = mysqli_fetch_array($dbi)){ ?>
                                </tr>
                                    <th><?php echo $rows["full_name"] ?></th>
                                    <td><?php echo $rows["email"] ?></td>
                                    <td><?php echo $rows["position"] ?></td>
                                    <td><?php echo $rows["my_phone_number"] ?></td>
                                    <td><?php echo $rows["blood_group"] ?></td>
                                    
                                </tr>

                        <?php }}?>
                        
                    </tbody>
                </table>
            </div>
        </div>
      
     






        <?php require_once("templete-parts/footer.php") ?>



