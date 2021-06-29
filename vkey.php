<?php 
require_once("rprocess.php");
$vkey= $_GET['vkey'];


if(isset($_POST['submit'])){
    $roll= $_POST['roll'];
    $dbz = mysqli_query($connection , "SELECT * FROM students WHERE exam_roll = $roll;");
    $dbv= mysqli_fetch_assoc($dbz);
    
    if($dbv['vkey'] == $vkey){

        header("location: wait.php");
    }
    else {
        echo "Wrong verification ";
    }
    
   
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome TO Academic Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container ">
        <div class="row">
            <div class="col">
                <a href="index.php"><img src="images/logo.png" alt="" width="25%" height="auto"></a>
            </div>
           
        </div>
        <div class="row center mt-5 ">
            <div class="col">
              
                <h5 class="welcome">Thank You for registration.To active your account ,enter your student id(Exam roll) below   
                </h5>
                <form action="" method="post">
                    <Label class="text-bold">Student Id (Exam Roll)</Label>
                    <input class=" " type="number" name ="roll">
                    <button class="btn btn-success" name="submit">Authenticate</button>
                </form>
            </div>
       
        
 
    </div>



    
</body>
</html>