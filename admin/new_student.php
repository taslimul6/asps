<?php



require_once("templete-parts/header.php");
require_once("../rprocess.php");

require_once("logic.php");
require_once("logic.php");


$dbi = $connection -> query("SELECT * FROM students WHERE auth = '0' ORDER BY exam_roll;");

$row = mysqli_num_rows($dbi);


?>



        <div class="container-fluid">
            <h2 class= "m-3 text-center" >New Students</h2>
        </div>
       
      
        <div class="row ml-2 mr-2">
            <div class="col-md-11 m-auto">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Exam Roll</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Batch</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            if($row>0){
                                while($rows = mysqli_fetch_array($dbi)){ ?>
                                </tr>
                                    <th><?php echo $rows["exam_roll"] ?></th>
                                    <td><a href="viewstu.php?id=<?php echo $rows['exam_roll'];?>"><?php echo $rows["full_name"] ?></a></td>
                                    <td><?php echo $rows["batch"] ?></td>
                                    <td><?php echo $rows["my_phone_number"] ?></td>
                                    <td><a href="approve.php?id=<?php echo $rows['exam_roll'] ?>" class="btn btn-success">Approve</a>
                                    <a href="del-stu.php?id=<?php echo $rows['exam_roll'] ?>" class="btn btn-danger">Remove</a></td>
                                </tr>

                        <?php }}?>
                        
                    </tbody>
                </table>
            </div>
        </div>
      
     






        <?php require_once("templete-parts/footer.php") ?>



